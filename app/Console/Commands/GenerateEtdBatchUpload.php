<?php

namespace DoiAssistant\Console\Commands;

use DoiAssistant\Degree;
use DoiAssistant\ProquestSubmissionEtd;
use Illuminate\Console\Command;
use PHPExcel;
use PHPExcel_IOFactory;
use banetbi\ezid\Ezid;
use Mail;

class GenerateEtdBatchUpload extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'etds:generate-batch-upload';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a batch upload file for etds that are unprocessed.';

    /**
     * The output basename for building the batch file.
     *
     * @var string
     */
    protected $strOutputFileName;

    /**
     * The output path for building the batch file.
     *
     * @var string
     */
    protected $strOutputPath;

    /**
     * File handle resource for CSV version of metadata.
     *
     * @var resource
     */
    protected $fileCSVOutput;

    /**
     * File handle for the XLS version of metadata.
     *
     * @var resource
     */
    protected $fileXLSOutput;

    /**
     * Header Row for Batch File
     *
     * @var string
     */
    protected $strETDHeaderRow = "'title','fulltext_url','keywords','abstract','author1_fname','author1_mname','author1_lname','author1_suffix','author1_email','author1_institution','advisor1','advisor2','advisor3','advisor4','advisor5','disciplines','degree_name','department','distribution_license','document_type','doi','embargo_date','language','orcid','publication_date','season','rights','label'";

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->strOutputPath = env('ETD_BATCH_UPLOAD');
        $this->strOutputFileName = 'etd_batch_upload.' . date('Y-m-d');
        //copy($this->strOutputPath . 'etd.xls', $this->strOutputPath . $this->strOutputFileName . '.xls');
        $this->fileCSVOutput = fopen($this->strOutputPath . $this->strOutputFileName . '.csv', 'a');
        //$this->fileXLSOutput = PHPExcel_IOFactory::load($this->strOutputPath . $this->strOutputFileName . '.xls');
        //$this->info(print_r($this->fileXLSOutput->getProperties()));
        parent::__construct();
    }

    public function __destruct()
    {
        //fclose($this->fileCSVOutput);

        //parent::__destruct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        date_default_timezone_set('America/New_York');

        $arrProquestSubmissionEtds = ProquestSubmissionEtd::where(['processed' => false])->get();
        if(count($arrProquestSubmissionEtds) > 0) {
            fwrite($this->fileCSVOutput, $this->strETDHeaderRow . "\n");
            foreach ($arrProquestSubmissionEtds as $objProquestSubmissionEtd) {
                $this->addMetadataRow($objProquestSubmissionEtd->metadata_path);
                $objProquestSubmissionEtd->processed = true;
                $objProquestSubmissionEtd->save();
                copy($objProquestSubmissionEtd->document_path, getenv('HOMEDIR') . 'public/etds/' . basename($objProquestSubmissionEtd->document_path));
            }
            fclose($this->fileCSVOutput);
            $objGeneratedCSV = PHPExcel_IOFactory::createReaderForFile($this->strOutputPath . $this->strOutputFileName . '.csv');
            $objGeneratedCSV->setEnclosure("'");
            $objWriterXLS = PHPExcel_IOFactory::createWriter($objGeneratedCSV->load($this->strOutputPath . $this->strOutputFileName . '.csv'), 'Excel5');
            //$objWriterXLS->setEnclosure("''");
            $objWriterXLS->save($this->strOutputPath . $this->strOutputFileName . '.xls');

            //Mail the spreadsheet to the administrator

            try {
                Mail::raw('A new ETD batch upload file has been created.  Please review and submit to BePress.', function($message) {
                    $message->subject('New ETD Batch Upload');
                    $message->from('noreply@dropinservers.com', 'Justin Dalton');
                    $message->to('jcdalton@wm.edu', 'Justin Dalton');
                    $message->attach($this->strOutputPath . $this->strOutputFileName . '.xls');
                });
            } catch(\Exception $e) {
                $this->error('Could not send email.');
                return;
            }
            $this->info('Email sent sucessfully!');
        }
        else {
            $this->info("No new etds found. No batch file created.");
        }
    }

    /**
     * Converts a single metadata file to a row in the batch upload spreadsheet.
     *
     * @param string $strXmlMetadataFile
     */
    private function addMetadataRow($strXmlMetadataFile) {
        $objXMLMetadata = simplexml_load_file($strXmlMetadataFile);
        $objAuthorship = $objXMLMetadata->DISS_authorship;
        $objDescription = $objXMLMetadata->DISS_description;
        $objContent = $objXMLMetadata->DISS_content;
        $objRestrictions = $objXMLMetadata->DISS_restrictions;
        $objRepository = $objXMLMetadata->DISS_repository;
        $objCreativeCommonsLicense = $objXMLMetadata->DISS_creative_commons_license;

        $arrMetadata = array();

        $strMetadataRow = '';
        $strFilteredTitle = mb_convert_case(strtolower($objDescription->DISS_title), MB_CASE_TITLE, "UTF-8");
        $strMetadataRow .= "'" . $strFilteredTitle . "',";
        $arrMetadata['datacite.title'] = $strFilteredTitle;
        $strMetadataRow .= "'" . getenv('SERVER_HOME') . '/etds/' . $objContent->DISS_binary . "',";
        $strMetadataRow .= "'" . $objDescription->DISS_categorization->DISS_keyword . "',";
        $strMetadataRow .= "'";
        //$this->info(print_r($objDescription));
        foreach($objContent->DISS_abstract->DISS_para as $strParagraph) {
            $strMetadataRow .= $strParagraph . ' ';
        }
        $strMetadataRow .= "',";
        $strCreator = $objAuthorship->DISS_author->DISS_name->DISS_surname . ', ' . $objAuthorship->DISS_author->DISS_name->DISS_fname;
        $arrMetadata['datacite.creator'] = $strCreator;
        $arrMetadata['datacite.publisher'] = $objDescription->DISS_institution->DISS_inst_name;

        $strMetadataRow .= "'" . $objAuthorship->DISS_author->DISS_name->DISS_fname . "',";
        $strMetadataRow .= "'" . $objAuthorship->DISS_author->DISS_name->DISS_middle . "',";
        $strMetadataRow .= "'" . $objAuthorship->DISS_author->DISS_name->DISS_surname . "',";
        $strMetadataRow .= "'" . $objAuthorship->DISS_author->DISS_name->DISS_suffix . "',";
        $strMetadataRow .= "'" . $objAuthorship->DISS_author->DISS_contact[0]->DISS_email . "',";
        $strMetadataRow .= "'" . $objDescription->DISS_institution->DISS_inst_name . "',";
        $intAdvisorCount = 0;
        if(is_array($objDescription->DISS_advisor)) {
            $intAdvisorCount = count($objDescription->DISS_advisor);
            if($intAdvisorCount >= 5) {
                $intAdvisorCount = 5;
                for($i=0; $i < $intAdvisorCount; $i++) {
                    $strMetadataRow .= "'" . $objDescription->DISS_advisor[$i]->DISS_name->DISS_fname . ' ' . $objDescription->DISS_advisor[$i]->DISS_name->DISS_middle . ' ' . $objDescription->DISS_advisor[$i]->DISS_name->DISS_surname . "',";
                }
            }
            else {
                $intRemaining = 5 - $intAdvisorCount;
                for($i=0; $i < $intAdvisorCount; $i++) {
                    $strMetadataRow .= "'" . $objDescription->DISS_advisor[$i]->DISS_name->DISS_fname . ' ' . $objDescription->DISS_advisor[$i]->DISS_name->DISS_middle . ' ' . $objDescription->DISS_advisor[$i]->DISS_name->DISS_surname . "',";
                }
                if(is_array($objDescription->DISS_cmte_member)) {
                    if(count($objDescription->DISS_cmte_member) >= $intRemaining) {
                        for($i=0; $i<$intRemaining; $i++) {
                            $strMetadataRow .= "'" . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_fname . ' ' . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_middle . ' ' . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_surname . "',";
                        }
                    }
                    else {
                        $intRemaining -= count($objDescription->DISS_cmte_member);
                        for($i=0; $i<(count($objDescription->DISS_cmte_member)); $i++) {
                            $strMetadataRow .= "'" . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_fname . ' ' . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_middle . ' ' . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_surname . "',";
                        }
                        for($i=0; $i<$intRemaining; $i++) {
                            $strMetadataRow .= "' ',";
                        }
                    }
                }
            }
        }
        else {
            //$this->info('There is only one advisor in the mix.');
            $strMetadataRow .= "'" . $objDescription->DISS_advisor->DISS_name->DISS_fname . ' ' . $objDescription->DISS_advisor->DISS_name->DISS_middle . ' ' . $objDescription->DISS_advisor->DISS_name->DISS_surname . "',";
            $intRemaining = 4;
            $this->info('I need ' . $intRemaining . ' spots filled.');
            $this->info(count($objDescription->DISS_cmte_member) . ' is total number of commitee members.');
            if(count($objDescription->DISS_cmte_member) > 1) {
                if(count($objDescription->DISS_cmte_member) >= $intRemaining) {
                    for($i=0; $i<$intRemaining; $i++) {
                        $strMetadataRow .= "'" . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_fname . ' ' . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_middle . ' ' . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_surname . "',";
                    }
                }
                else {
                    $intRemaining -= count($objDescription->DISS_cmte_member);
                    for($i=0; $i<(count($objDescription->DISS_cmte_member)); $i++) {
                        $this->info("'" . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_fname . ' ' . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_middle . ' ' . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_surname . "',");
                        $strMetadataRow .= "'" . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_fname . ' ' . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_middle . ' ' . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_surname . "',";
                    }
                    for($i=0; $i<$intRemaining; $i++) {
                        $this->info($i . ' ...');
                        $strMetadataRow .= "' ',";
                    }
                }
            }
        }

        $strMetadataRow .= "'" . $objDescription->DISS_institution->DISS_inst_contact . "',";

        $strMetadataRow .= "'" . $this->getDegreeByAbbreviation($objDescription->DISS_degree) . "',";

        $strMetadataRow .= "'" . $objDescription->DISS_institution->DISS_inst_contact . "',";
        //$strMetadataRow .= "'" . $objXMLMetadata->DISS_creative_commons_license->DISS_abbreviation . "',";
        switch($objXMLMetadata->DISS_creative_commons_license->DISS_abbreviation) {
            case "CC BY":
                $strMetadataRow .= "'http://creativecommons.org/licenses/by/4.0/',";
                break;
            case "CC BY-SA":
                $strMetadataRow .= "'http://creativecommons.org/licenses/by-sa/4.0/',";
                break;
            case "CC BY-ND":
                $strMetadataRow .= "'http://creativecommons.org/licenses/by-nd/4.0/',";
                break;
            case "CC BY-NC":
                $strMetadataRow .= "'http://creativecommons.org/licenses/by-nc/4.0/',";
                break;
            case "CC BY-NC-SA":
                $strMetadataRow .= "'http://creativecommons.org/licenses/by-nc-sa/4.0/',";
                break;
            case "CC BY-NC-ND":
                $strMetadataRow .= "'http://creativecommons.org/licenses/by-nc-nd/4.0/',";
                break;
            default:
                $strMetadataRow .= "'http://creativecommons.org/licenses/by/4.0/',";

        }
        if($objDescription->attributes()->type == 'doctoral') {
            $strMetadataRow .= "'dissertation',";
        }
        else {
            $strMetadataRow .= "'thesis',";
        }
        $strLabelTime = time();
        $arrMetadata['datacite.publicationyear'] = date('Y', strtotime($objRepository->DISS_agreement_decision_date));
        $arrMetadata['datacite.resourcetype'] = 'Text';
        $arrMetadata['_target'] = getenv('ETD_IR_BASEURL') . '/' . $strLabelTime;

        try {
            $strDOI = $this->createDOI($arrMetadata, $strLabelTime, Ezid::IDENTIFIER_TYPE_DOI);
        } catch (\Exception $e) {
            $strDOI = '';
        }
        if(substr($strDOI, 0, 1) !== 'd') {
            $strDOI = "";
        }
        $strMetadataRow .= "'" . $strDOI . "',";
        $this->info($objXMLMetadata->attributes()->embargo_code . ' is embargo code.');
        if((string)$objXMLMetadata->attributes()->embargo_code === '0') {
            $strMetadataRow .= "'0',";
        }
        elseif((string)$objXMLMetadata->attributes()->embargo_code === '1') {
            $strMetadataRow .= "'365',";
        }
        elseif((string)$objXMLMetadata->attributes()->embargo_code === '2') {
            $strMetadataRow .= "'365',";
        }
        elseif((string)$objXMLMetadata->attributes()->embargo_code === '3') {
            $strMetadataRow .= "'730',";
        }
        elseif((string)$objXMLMetadata->attributes()->embargo_code === '4') {
            $strMetadataRow .= "'" . $objRepository->DISS_delayed_release . "',";
        }

        $strMetadataRow .= $this->getLanguageByAbbreviation($objDescription->DISS_categorization->DISS_language) . ",";
        $strMetadataRow .= "'',";
        $arrAgreementDecisionDate = explode(" ", $objRepository->DISS_agreement_decision_date);

        $strMetadataRow .= "'" . $arrAgreementDecisionDate[0] . "',";
        $strMetadataRow .= "'" . $this->getCurrentSeason() . "',";
        $strMetadataRow .= "'None',";

        $strMetadataRow .= "'" . $strLabelTime . "'";


        fwrite($this->fileCSVOutput, $strMetadataRow . "\n");
        
        //$this->info(print($strMetadataRow));
    }

    /**
     * @param array $arrMetadata
     * @param string $strLabelTime
     * @param int $intIdentifierType
     * @return string
     * @throws \Exception
     */
    private function createDOI($arrMetadata, $strLabelTime, $intIdentifierType) {
        $objEzid = new Ezid(getenv('EZID_USERNAME'), getenv('EZID_PASSWORD'), getenv('DOI_SHOULDER'), getenv('ARK_SHOULDER'));
        $strResponse = $objEzid->mintIdentifier(getenv('DOI_SHOULDER'), $intIdentifierType, $arrMetadata);
        if(strpos($strResponse, 'success') !== false) {
            $arrResponse = explode('|', $strResponse);
            $arrDOI = explode(" ", $arrResponse[0]);
            $this->info(print_r($strResponse));
            $this->info("DOI is " . $arrDOI[1] . "\n");
            return $arrDOI[1];
        }
        else {
            $this->info(print_r($strResponse));
            return $strResponse;
        }

    }

    /**
     * Lookup degrees in the database based on the provided degree abbreviation.
     *
     * @param string $strSubmittedAbbreviation
     * @return string
     */
    private function getDegreeByAbbreviation($strSubmittedAbbreviation) {
        //First remove any punctuation and spacing
        $strCleanAbbreviation = strtolower(preg_replace('/[^a-z]+/i', '', $strSubmittedAbbreviation));
        \DB::listen(function($sql) {
            $this->info(var_dump($sql));

        });
        //Find a degree with the provided abbreviation
        $objDegree = Degree::where('abbreviation', $strCleanAbbreviation)->first();
        //If one doesn't exists, just call it a PhD
        if(!$objDegree instanceof Degree) {
            return 'Doctor of Philosophy';
        }
        else {
            return $objDegree->degree;
        }
    }

    /**
     * Convert the language abbreviation to a valid language string for submission.
     *
     * @param string $strSubmittedAbbreviation
     * @return string
     */
    private function getLanguageByAbbreviation($strSubmittedAbbreviation) {
        $strReturnLanguage = '';
        switch($strSubmittedAbbreviation) {
            case "en":
                $strReturnLanguage = "'English'";
                break;
            case "fr":
                $strReturnLanguage = "'French'";
                break;
            case "cn":
                $strReturnLanguage = "'Chinese'";
                break;
            case "ar":
                $strReturnLanguage = "'Arabic'";
                break;
            case "de":
                $strReturnLanguage = "'German'";
                break;
            case "es":
                $strReturnLanguage = "'Spanish'";
                break;
            case "it":
                $strReturnLanguage = "'Italian'";
                break;
            case "ja":
                $strReturnLanguage = "'Japanese'";
                break;
            case "ru":
                $strReturnLanguage = "'Russian'";
                break;
            default:
                $strReturnLanguage = "'English'";
        }
        return $strReturnLanguage;
    }

    /**
     * Get current season.
     *
     * @return string
     */
    private function getCurrentSeason()
    {
        $currentMonth = date("m");

        //retrieve season
        if ($currentMonth >= "03" && $currentMonth <= "05") {
            $season = "Spring";
        } elseif ($currentMonth >= "06" && $currentMonth <= "08") {
            $season = "Summer";
        }
        elseif($currentMonth>="09" && $currentMonth<="11") {
            $season = "Fall";
        }
        else {
            $season = "Winter";
        }
        return $season;
    }
}
