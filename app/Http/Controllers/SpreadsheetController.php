<?php

namespace DoiAssistant\Http\Controllers;

use Illuminate\Http\Request;

use DoiAssistant\Http\Requests;
use Zofe\Rapyd\DataGrid\DataGrid;
use Zofe\Rapyd\DataEdit;
use DoiAssistant\Spreadsheet;
use Illuminate\Support\Facades\Storage;
use PHPExcel;
use PHPExcel_IOFactory;
use banetbi\ezid\Ezid;
use Mail;

class SpreadsheetController extends Controller
{
    /**
     * Show the Spreadsheet dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$arrProquestEtds = ProquestSubmissionEtd::all();
        $grid = DataGrid::source(new Spreadsheet);
        $grid->add('<a href="/spreadsheet/show/{{$id}}">{{$id}}</a>', 'Id', true);
        $grid->add('{{basename($document_path)}}', 'Document');
        $grid->add('{{$processed == 1 ? "True" : "False"}}', 'Processed?');
        $grid->add('{{date("m/d/Y", strtotime($updated_at))}}', 'Updated');
        return view('spreadsheet.index', compact('grid'));
    }

    public function create() {
        return view('spreadsheet.create');
    }

    public function store(Request $spreadsheet) {
        Storage::put($spreadsheet->file('file_upload')->getClientOriginalName(), file_get_contents($spreadsheet->file('file_upload')->getRealPath()));
        $objSpreadsheet = new Spreadsheet();
        $objSpreadsheet->document_path = $spreadsheet->file('file_upload')->getClientOriginalName();
        $objSpreadsheet->save();
        //print_r($spreadsheet);
        return redirect('/spreadsheet');
    }

    public function show($id) {
        $objSpreadsheet = Spreadsheet::find($id);
        //$fileSpreadsheet = Storage::get($objSpreadsheet->document_path);
        $fileXLSInput = PHPExcel_IOFactory::load('/var/www/doi_assistant/storage/app/' . $objSpreadsheet->document_path);

        $arrSheetData = $fileXLSInput->getActiveSheet()->toArray(null, true, true, true);
        //$this->info(print_r($arrSheetData));
        //print_r($arrSheetData);
        //$fileXLSOutput = PHPExcel_IOFactory::load(rOutputPath . $this->strOutputFileName . '.xls');
        //$this->info(print_r($this->fileXLSOutput->getProperties()));
        return view('spreadsheet.show', compact('arrSheetData'));
    }

    public function register(Request $objRequest) {
        $strResponse = '';
        foreach($objRequest->all() as $key => $value) {
            if($value != '-----') {
                $strRealKey = substr($key, 0, -12);
                $strResponse .= "$strRealKey is $value<br />\n";
            }
        }

        $objSpreadsheet = Spreadsheet::find($objRequest->get('id'));
        $fileXLSInput = PHPExcel_IOFactory::load('/var/www/doi_assistant/storage/app/' . $objSpreadsheet->document_path);
        $arrSheetData = $fileXLSInput->getActiveSheet()->toArray(null, true, true, true);

        $arrSheetLayout = array();
        $arrHeaderRow = $arrSheetData[1];
        foreach($objRequest->all() as $key => $value) {
            if($value != '-----' && $key != 'id') {
                $strRealKey = substr($key, 0, -12);
                if($strRealKey != '' && $objRequest->exists($strRealKey)) {
                    foreach ($arrHeaderRow as $intHeaderKey => $strHeaderValue) {
                        if ($strRealKey == $strHeaderValue) {
                            $arrSheetLayout[$intHeaderKey] = $strRealKey;
                        }
                    }
                }
            }
        }
        $strOutput = '';
        $strOutput .= $strResponse . "\n";
        foreach($arrSheetData as $arrRow) {
            $arrMetadata = array();
            $strOutput .= var_dump($arrSheetLayout);
            foreach($arrSheetLayout as $column => $value) {
                //$strOutput .= var_dump($arrRow);
                if($value == 'title') {
                    $strOutput .= var_dump($arrRow);
                    $strFilteredTitle = mb_convert_case(strtolower($arrRow[$column]), MB_CASE_TITLE, "UTF-8");
                    $arrMetadata['datacite.title'] = $strFilteredTitle;
                } elseif($value == 'publication_date') {
                    $arrMetadata['datacite.publicationyear'] = date('Y', strtotime($arrRow[$column]));
                } elseif($value == 'fulltext_url') {
                    $arrMetadata['_target'] = $arrRow[$column];
                }

                $arrMetadata['datacite.resourcetype'] = 'Text';
                if($value == 'creator_firstname') {
                    $arrMetadata['datacite.creator'] = $arrRow[$arrSheetLayout['creator_firstname']] . ' ' . $arrRow[$arrSheetLayout['creator_lastname']];
                } elseif($value == 'creator') {
                    $arrMetadata['datacite.creator'] = $arrRow[$column];
                }
                $arrMetadata['datacite.publisher'] = $objDescription->DISS_institution->DISS_inst_name->__toString();
                //$strOutput .= $value .= ': ' . $arrRow[$column] . ', ';
            }
            $strOutput .= var_dump($arrMetadata);

        }
        return var_dump($strOutput);

    }

    /**
     * @param array $arrMetadata
     * @param string $strLabelTime
     * @param int $intIdentifierType
     * @return string
     * @throws \Exception
     */
    private function createDOI($arrMetadata, $strLabelTime, $intIdentifierType, $strInstitutionName) {
        $strDOIShoulder = '';
        $strArkShoulder = getenv('ARK_SHOULDER');
        switch($strInstitutionName) {
            case "College of William and Mary - School of Education":
                $strDOIShoulder = getenv('DOI_SHOULDER_ED');
                break;
            case "College of William and Mary - Arts & Sciences":
                $strDOIShoulder = getenv('DOI_SHOULDER_AS');
                break;
            case "College of William and Mary - Virginia Institute of Marine Science":
                $strDOIShoulder = getenv('DOI_SHOULDER_VIMS');
                break;
            default:
                $strDOIShoulder = getenv('DOI_SHOULDER');
                $strArkShoulder = getenv('ARK_SHOULDER');
        }
        $this->info(getenv('EZID_USERNAME') . ' ' .  getenv('EZID_PASSWORD') . ' ' .  $strDOIShoulder . ' ' . $strArkShoulder);
        $objEzid = new Ezid(getenv('EZID_USERNAME'), getenv('EZID_PASSWORD'), $strDOIShoulder, $strArkShoulder);
        $strResponse = $objEzid->mintIdentifier($strDOIShoulder, $intIdentifierType, $arrMetadata);
        if(strpos($strResponse, 'success') !== false) {
            $arrResponse = explode('|', $strResponse);
            $arrDOI = explode(" ", $arrResponse[0]);
            $this->info(print_r($strResponse));
            $this->info("DOI is " . $arrDOI[1] . "\n");
            return 'http://dx.doi.org/' . $arrDOI[1];
        }
        else {
            $this->info(print_r($strResponse));
            return $strResponse;
        }
        //return '';

    }
}
