<?php

namespace DoiAssistant\Console\Commands;

use DoiAssistant\Degree;
use DoiAssistant\ProquestSubmissionEtd;
use Illuminate\Console\Command;
use PHPExcel;
use PHPExcel_IOFactory;
use banetbi\ezid\Ezid;
use Mail;
use PDFMerger;

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
    protected $strETDHeaderRow = "title|fulltext_url|abstract|author1_fname|author1_mname|author1_lname|author1_suffix|author1_email|author1_institution|advisor1|advisor2|advisor3|advisor4|advisor5|disciplines|degree_name|department|distribution_license|document_type|doi|embargo_date|language|orcid|publication_date|season|rights|label";

    /**
     * Current submission being processed, just makes things easier to reference this.
     *
     * @var ProquestSubmissionEtd
     */
    protected $objCurrentSubmission;
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
                $this->objCurrentSubmission = $objProquestSubmissionEtd;
                try {
                    $this->addMetadataRow($objProquestSubmissionEtd->metadata_path);
                }
                catch(\Exception $e) {
                    $this->objCurrentSubmission->has_errors = 1;
                    $this->objCurrentSubmission->error_log = $e->getMessage();
                    $this->objCurrentSubmission->save();
                }
                if($this->objCurrentSubmission->has_errors !== 1) {
                    $objProquestSubmissionEtd->processed = true;
                    $objProquestSubmissionEtd->save();
                }

                copy($objProquestSubmissionEtd->document_path, getenv('HOMEDIR') . 'public/etds/' . basename($objProquestSubmissionEtd->document_path));
            }
            fclose($this->fileCSVOutput);
            $objReader = PHPExcel_IOFactory::createReader('CSV');
            $objReader->setDelimiter("|");
            $objReader->setEnclosure('"');
            $objGeneratedCSV = $objReader->load($this->strOutputPath . $this->strOutputFileName . '.csv');
            $objWriterXLS = PHPExcel_IOFactory::createWriter($objGeneratedCSV, 'Excel5');
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
        $arrMetadataRow = array();
        //$strMetadataRow = '';
        $strFilteredTitle = mb_convert_case(strtolower($objDescription->DISS_title), MB_CASE_TITLE, "UTF-8");
        $arrMetadataRow[] = $strFilteredTitle;
        //$strMetadataRow .= "'" . $strFilteredTitle . "',";
        $arrMetadata['datacite.title'] = $strFilteredTitle;
        if($this->objCurrentSubmission->dissertation_defense_path != '') {
            try{
                $this->addSignaturePage($this->objCurrentSubmission->document_path, $this->objCurrentSubmission->dissertation_defense_path);
            }
            catch(\Exception $e) {
                throw new \Exception($e->getMessage());
            }
        }
        $arrMetadataRow[] = getenv('SERVER_HOME') . '/etds/' . $objContent->DISS_binary;
        //$strMetadataRow .= "'" . getenv('SERVER_HOME') . '/etds/' . $objContent->DISS_binary . "',";
        //$arrMetadataRow[] = $objDescription->DISS_categorization->DISS_keyword->__toString();
        //$strMetadataRow .= "'" . $objDescription->DISS_categorization->DISS_keyword . "',";
        //$strMetadataRow .= "'";
        $strAbstract = '';
        //$this->info(print_r($objDescription));
        foreach($objContent->DISS_abstract->DISS_para as $strParagraph) {
            $strAbstract .= $strParagraph . ' ';
        }
        $arrMetadataRow[] = $strAbstract;
        //$strMetadataRow .= "',";
        $strCreator = $objAuthorship->DISS_author->DISS_name->DISS_surname->__toString() . ', ' . $objAuthorship->DISS_author->DISS_name->DISS_fname->__toString();
        $arrMetadata['datacite.creator'] = $strCreator;
        $arrMetadata['datacite.publisher'] = $objDescription->DISS_institution->DISS_inst_name->__toString();

        $arrMetadataRow[] = $objAuthorship->DISS_author->DISS_name->DISS_fname->__toString();
        $strMiddleHolder = $objAuthorship->DISS_author->DISS_name->DISS_middle->__toString();
        if(strlen($strMiddleHolder) > 0 && strlen($strMiddleHolder) < 2) {
            $arrMetadataRow[] = $strMiddleHolder . '.';
        }
        else {
            $arrMetadataRow[] = $strMiddleHolder;
        }
        //$arrMetadataRow[] = $objAuthorship->DISS_author->DISS_name->DISS_middle->__toString();
        $arrMetadataRow[] = $objAuthorship->DISS_author->DISS_name->DISS_surname->__toString();
        $arrMetadataRow[] = $objAuthorship->DISS_author->DISS_name->DISS_suffix->__toString();
        $arrMetadataRow[] = $objAuthorship->DISS_author->DISS_contact[0]->DISS_email->__toString();
        $arrMetadataRow[] =  $objDescription->DISS_institution->DISS_inst_name->__toString();
        $intAdvisorCount = 0;
        if(is_array($objDescription->DISS_advisor)) {
            $intAdvisorCount = count($objDescription->DISS_advisor);
            if($intAdvisorCount >= 5) {
                $intAdvisorCount = 5;
                for($i=0; $i < $intAdvisorCount; $i++) {
                    $arrMetadataRow[] = $objDescription->DISS_advisor[$i]->DISS_name->DISS_fname . ' ' . $objDescription->DISS_advisor[$i]->DISS_name->DISS_middle . ' ' . $objDescription->DISS_advisor[$i]->DISS_name->DISS_surname;
                }
            }
            else {
                $intRemaining = 5 - $intAdvisorCount;
                for($i=0; $i < $intAdvisorCount; $i++) {
                    $arrMetadataRow[] = $objDescription->DISS_advisor[$i]->DISS_name->DISS_fname . ' ' . $objDescription->DISS_advisor[$i]->DISS_name->DISS_middle . ' ' . $objDescription->DISS_advisor[$i]->DISS_name->DISS_surname;
                }
                if(is_array($objDescription->DISS_cmte_member)) {
                    if(count($objDescription->DISS_cmte_member) >= $intRemaining) {
                        for($i=0; $i<$intRemaining; $i++) {
                            $arrMetadataRow[] = $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_fname . ' ' . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_middle . ' ' . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_surname;
                        }
                    }
                    else {
                        $intRemaining -= count($objDescription->DISS_cmte_member);
                        for($i=0; $i<(count($objDescription->DISS_cmte_member)); $i++) {
                            $arrMetadataRow[] = $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_fname . ' ' . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_middle . ' ' . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_surname;
                        }
                        for($i=0; $i<$intRemaining; $i++) {
                            $arrMetadataRow[] = "";
                        }
                    }
                }
            }
        }
        else {
            //$this->info('There is only one advisor in the mix.');
            $arrMetadataRow[] = $objDescription->DISS_advisor->DISS_name->DISS_fname . ' ' . $objDescription->DISS_advisor->DISS_name->DISS_middle . ' ' . $objDescription->DISS_advisor->DISS_name->DISS_surname;
            $intRemaining = 4;
            $this->info('I need ' . $intRemaining . ' spots filled.');
            $this->info(count($objDescription->DISS_cmte_member) . ' is total number of commitee members.');
            if(count($objDescription->DISS_cmte_member) > 1) {
                if(count($objDescription->DISS_cmte_member) >= $intRemaining) {
                    for($i=0; $i<$intRemaining; $i++) {
                        $arrMetadataRow[] = $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_fname . ' ' . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_middle . ' ' . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_surname;
                    }
                }
                else {
                    $intRemaining -= count($objDescription->DISS_cmte_member);
                    for($i=0; $i<(count($objDescription->DISS_cmte_member)); $i++) {
                        $this->info("'" . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_fname . ' ' . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_middle . ' ' . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_surname . "',");
                        $arrMetadataRow[] = $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_fname . ' ' . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_middle . ' ' . $objDescription->DISS_cmte_member[$i]->DISS_name->DISS_surname;
                    }
                    for($i=0; $i<$intRemaining; $i++) {
                        $this->info($i . ' ...');
                        $arrMetadataRow[] = "";
                    }
                }
            }
            else {
                for($i=0; $i<$intRemaining; $i++) {
                    $this->info($i . ' ...');
                    $arrMetadataRow[] = "";
                }
            }
        }

        $arrMetadataRow[] = $objDescription->DISS_institution->DISS_inst_contact->__toString();

        $arrMetadataRow[] = $this->getDegreeByAbbreviation($objDescription->DISS_degree);

        $arrMetadataRow[] = $objDescription->DISS_institution->DISS_inst_contact->__toString();
        //$strMetadataRow .= "'" . $objXMLMetadata->DISS_creative_commons_license->DISS_abbreviation . "',";
        switch($objXMLMetadata->DISS_creative_commons_license->DISS_abbreviation) {
            case "CC BY":
                $arrMetadataRow[] = "http://creativecommons.org/licenses/by/4.0/";
                break;
            case "CC BY-SA":
                $arrMetadataRow[] = "http://creativecommons.org/licenses/by-sa/4.0/";
                break;
            case "CC BY-ND":
                $arrMetadataRow[] = "http://creativecommons.org/licenses/by-nd/4.0/";
                break;
            case "CC BY-NC":
                $arrMetadataRow[] .= "http://creativecommons.org/licenses/by-nc/4.0/";
                break;
            case "CC BY-NC-SA":
                $arrMetadataRow[] = "http://creativecommons.org/licenses/by-nc-sa/4.0/";
                break;
            case "CC BY-NC-ND":
                $arrMetadataRow[] = "http://creativecommons.org/licenses/by-nc-nd/4.0/";
                break;
            default:
                $arrMetadataRow[] = "http://creativecommons.org/licenses/by/4.0/";

        }
        if($objDescription->attributes()->type == 'doctoral') {
            $arrMetadataRow[] = "dissertation";
        }
        else {
            $arrMetadataRow[] = "thesis";
        }
        $strLabelTime = time();
        $arrMetadata['datacite.publicationyear'] = date('Y', strtotime($objRepository->DISS_agreement_decision_date));
        $arrMetadata['datacite.resourcetype'] = 'Text';
        $arrMetadata['_target'] = getenv('ETD_IR_BASEURL') . '/' . $strLabelTime;

        $strDOI = '';
        try {
            $strDOI = $this->createDOI($arrMetadata, $strLabelTime, Ezid::IDENTIFIER_TYPE_DOI, $objDescription->DISS_institution->DISS_inst_name);
        } catch (\Exception $e) {
            $this->error($e->getMessage());
            $strDOI = '';
        }
        if(substr($strDOI, 0, 1) !== 'h') {
            $strDOI = "";
        }
        $arrMetadataRow[] = $strDOI;
        $this->info($objXMLMetadata->attributes()->embargo_code . ' is embargo code.');
        if((string)$objXMLMetadata->attributes()->embargo_code === '0') {
            $arrMetadataRow[] = "0";
        }
        elseif((string)$objXMLMetadata->attributes()->embargo_code === '1') {
            $arrMetadataRow[] = "365";
        }
        elseif((string)$objXMLMetadata->attributes()->embargo_code === '2') {
            $arrMetadataRow[] = "365";
        }
        elseif((string)$objXMLMetadata->attributes()->embargo_code === '3') {
            $arrMetadataRow[] = "730";
        }
        elseif((string)$objXMLMetadata->attributes()->embargo_code === '4') {
            $arrMetadataRow[] = $objRepository->DISS_delayed_release;
        }
        elseif((string)$objRestrictions->DISS_sales_restriction->attributes()->remove != '') {
            $arrMetadataRow[] = $objRestrictions->DISS_sales_restriction->attributes()->remove;
        }
        else {
            $arrMetadataRow[] = '';
        }


        $arrMetadataRow[] = $this->getLanguageByAbbreviation($objDescription->DISS_categorization->DISS_language);
        $arrMetadataRow[] = $objAuthorship->DISS_author->DISS_orcid;
        $arrAgreementDecisionDate = explode(" ", $objRepository->DISS_agreement_decision_date);

        $arrMetadataRow[] = $arrAgreementDecisionDate[0];
        $arrMetadataRow[] = $this->getCurrentSeason();
        $arrMetadataRow[] = "None";

        $arrMetadataRow[] = $strLabelTime;
        $this->info(print_r($arrMetadataRow));
        fputcsv($this->fileCSVOutput, $arrMetadataRow, "|");
        //fwrite($this->fileCSVOutput, $strMetadataRow . "\n");
        
        //$this->info(print($strMetadataRow));
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

    private function addSignaturePage($strETDFile, $strSignatureFile) {

        $pdf = new PDFMerger;
        $this->info($strSignatureFile . ' is signature file. ' . $strETDFile . ' is ETD file.');
        exec('/usr/bin/gs -sDEVICE=pdfwrite -dCompatabilityLevel=1.4 -dNOPAUSE -dQUIET -dBATCH -sOutputFile="' . $strSignatureFile . '-1.4.pdf" "' . $strSignatureFile . '"');
        exec('/usr/bin/gs -sDEVICE=pdfwrite -dCompatabilityLevel=1.4 -dNOPAUSE -dQUIET -dBATCH -sOutputFile="' . $strETDFile . '-1.4.pdf" "' . $strETDFile . '"');

        $this->info('/usr/bin/gs -sDEVICE=pdfwrite -dCompatabilityLevel=1.4 -dNOPAUSE -dQUIET -dBATCH -sOutputFile="' . $strSignatureFile . '-1.4.pdf" "' . $strSignatureFile . '"');
        $pdf->addPDF($strSignatureFile . '-1.4.pdf', 'all');
        $pdf->addPDF($strETDFile . '-1.4.pdf', 'all');
        $this->info(getenv('HOMEDIR') . 'public/etds/' . basename($this->objCurrentSubmission->document_path));
        try {
            $pdf->merge('file', getenv('HOMEDIR') . 'public/etds/' . basename($this->objCurrentSubmission->document_path));
        } catch (\Exception $e) {
            $this->error('Error adding signature page. ' . $e->getMessage());
            throw new Exception('Error adding signature page. ' . $e->getMessage());
        }
        return true;
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
            //$this->info(var_dump($sql));

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
                $strReturnLanguage = "English";
                break;
            case "fr":
                $strReturnLanguage = "French";
                break;
            case "cn":
                $strReturnLanguage = "Chinese";
                break;
            case "ar":
                $strReturnLanguage = "Arabic";
                break;
            case "de":
                $strReturnLanguage = "German";
                break;
            case "es":
                $strReturnLanguage = "Spanish";
                break;
            case "it":
                $strReturnLanguage = "Italian";
                break;
            case "ja":
                $strReturnLanguage = "Japanese";
                break;
            case "ru":
                $strReturnLanguage = "Russian";
                break;
            default:
                $strReturnLanguage = "English";
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

    /**
     * Get the discipline(Digital Commons) based on the ProQuest Code
     * @param string $strProquestCode
     * @return string
     */
    private function crosswalkDiscipline($strProquestCode) {

    }
}
