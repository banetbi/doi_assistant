<?php

namespace DoiAssistant\Jobs;

use DoiAssistant\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use PhpParser\Node\Expr\Cast\Object_;
use DoiAssistant\Spreadsheet;
use Illuminate\Support\Facades\Storage;
use PHPExcel;
use PHPExcel_IOFactory;
use banetbi\ezid\Ezid;
use Mail;

class ProcessSpreadsheet extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
    protected $objRequest;
    protected $strOutputPath;
    protected $strOutputFileName;

    /**
     * Create a new job instance.
     *
     * @param Request $objRequest
     * @return void
     */
    public function __construct($objRequest)
    {
        $this->objRequest = $objRequest;
        $this->strOutputPath = env('ETD_BATCH_UPLOAD');
        $this->strOutputFileName = 'spreadsheet_upload.' . date('Y-m-d');
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $strResponse = '';
        foreach($this->objRequest as $key => $value) {
            if($value != '-----') {
                $strRealKey = substr($key, 0, -12);
                $strResponse .= "$strRealKey is $value<br />\n";
            }
        }

        $objSpreadsheet = Spreadsheet::find($this->objRequest['id']);
        $fileXLSInput = PHPExcel_IOFactory::load('/var/www/doi_assistant/storage/app/' . $objSpreadsheet->document_path);
        $arrSheetData = $fileXLSInput->getActiveSheet()->toArray(null, true, true, true);
        $arrSheetOutput = array();
        $arrSheetLayout = array();
        $arrHeaderRow = $arrSheetData[1];
        foreach($this->objRequest as $key => $value) {

            if($value != '-----' && $key != 'id') {

                $strRealKey = substr($key, 0, -12);
                if($strRealKey != '' && array_key_exists($strRealKey, $this->objRequest)) {
                    //print("$strRealKey is $value<br />\n");
                    foreach ($arrHeaderRow as $intHeaderKey => $strHeaderValue) {
                        if ($strRealKey == $strHeaderValue) {
                            //print("$intHeaderKey is $strHeaderValue<br />\n");
                            $arrSheetLayout[$value] = $intHeaderKey;
                        }
                    }
                }
            }
        }
        $strOutput = '';
        $strOutput .= $strResponse . "\n";
        $arrMetadata = array();
        foreach($arrSheetData as $intRowNum => $arrRow) {
            //print("Row is $intRowNum <br />\n");
            //print_r($arrRow);
            //print("<br />\n");
            //print_r($arrSheetLayout);
            if($intRowNum > 1) {
                foreach ($arrSheetLayout as $column => $value) {
                    if ($column == 'title') {
                        $strFilteredTitle = mb_convert_case(strtolower($arrRow[$value]), MB_CASE_TITLE, "UTF-8");
                        $arrMetadata['datacite.title'] = $strFilteredTitle;
                    } elseif ($column == 'year') {
                        $arrMetadata['datacite.publicationyear'] = date('Y', strtotime($arrRow[$value]));
                    } elseif ($column == 'location') {
                        $arrMetadata['_target'] = $arrRow[$value];
                    }

                    $arrMetadata['datacite.resourcetype'] = 'Text';
                    if ($column == 'creator_firstname') {
                        $arrMetadata['datacite.creator'] = $arrRow[$arrSheetLayout['creator_firstname']] . ' ' . $arrRow[$arrSheetLayout['creator_lastname']];
                    } elseif ($value == 'creator') {
                        $arrMetadata['datacite.creator'] = $arrRow[$value];
                    }
                    $arrMetadata['datacite.publisher'] = $arrRow[$value];
                    //$strOutput .= $value .= ': ' . $arrRow[$column] . ', ';
                }
                //$strOutput .= var_dump($arrMetadata);

                $strDOIResponse = $this->createDOI($arrMetadata, time(), Ezid::IDENTIFIER_TYPE_DOI, '');
                if(strpos($strDOIResponse, 'dx.doi.org') !== false) {
                    $arrRow['DOI'] = $strDOIResponse;
                } else {
                    $arrRow['DOI'] = '';
                    $arrRow['Error'] = $strDOIResponse;
                }
                $arrSheetOutput[] = $arrRow;
            } else {
                $arrSheetData[1][] = 'doi';
                $arrSheetOutput[] = $arrSheetData[1];
            }
            //print('"' . implode('","', $arrRow) . '"' ."\n");

            if($intRowNum > 5) {

            }
        }
        $fileXLSOutput = new PHPExcel();
        $fileXLSOutput->setActiveSheetIndex(0);
        $fileXLSOutput->getActiveSheet()->fromArray($arrSheetOutput);

        // Do your stuff here

        $writer = PHPExcel_IOFactory::createWriter($fileXLSOutput, 'Excel5');
        $writer->save($this->strOutputPath . $this->strOutputFileName . '.xls');
        try {
            Mail::raw('DOIs have been assigned based on the spreadsheet you uploaded.', function($message) {
                $message->subject('New DOI Spreadsheet');
                $message->from('noreply@wmlibraries.com', 'Justin Dalton');
                $message->to('jcdalton@wm.edu', 'Justin Dalton');
                $message->attach($this->strOutputPath . $this->strOutputFileName . '.xls');
            });
        } catch(\Exception $e) {
            //$this->error('Could not send email.');
            return;
        }
        //$this->info('Email sent sucessfully!');
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
        //$this->info(getenv('EZID_USERNAME') . ' ' .  getenv('EZID_PASSWORD') . ' ' .  $strDOIShoulder . ' ' . $strArkShoulder);
        $objEzid = new Ezid(getenv('EZID_USERNAME'), getenv('EZID_PASSWORD'), $strDOIShoulder, $strArkShoulder);
        $strResponse = $objEzid->mintIdentifier($strDOIShoulder, $intIdentifierType, $arrMetadata);
        if(strpos($strResponse, 'success') !== false) {
            $arrResponse = explode('|', $strResponse);
            $arrDOI = explode(" ", $arrResponse[0]);
            //$this->info(print_r($strResponse));
            //$this->info("DOI is " . $arrDOI[1] . "\n");
            return 'http://dx.doi.org/' . $arrDOI[1];
        }
        else {
            $this->info(print_r($strResponse));
            return $strResponse;
        }
        //return '';

    }
}
