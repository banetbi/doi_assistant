<?php

namespace DoiAssistant\Jobs;

use DoiAssistant\EtdIngestError;
use DoiAssistant\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Symfony\Component\Routing\Exception\MissingMandatoryParametersException;
use DoiAssistant\ProquestSubmissionEtd;

class IngestEtd extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $strEtdFile;
    protected $strEtdPath;
    protected $strEtdExtractionPath;
    /**
     * Create a new job instance.
     *
     * @return void
     * @throws MissingMandatoryParametersException
     */
    public function __construct($strEtdFile)
    {
        $this->strEtdPath = env("ETD_STORAGE");
        $this->strEtdFile = $strEtdFile;
        $this->strEtdExtractionPath = env("ETD_EXTRACTION");
        if($this->strEtdFile === '' || empty($this->strEtdFile) || !isset($this->strEtdFile)) {
            throw new MissingMandatoryParametersException('A file to process must be submitted.');
        }
        if ($this->strEtdPath === '') {
            throw new MissingMandatoryParametersException('Environment variable must be set for ETD_STORAGE');
        }
        if($this->strEtdExtractionPath === '') {
            throw new MissingMandatoryParametersException('Environment variable must be set for ETD_EXTRACTION');
        }
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $zipEtd = new \ZipArchive();
        $objIngestError = new EtdIngestError;
        if($zipEtd->open($this->strEtdFile) === TRUE && filesize($this->strEtdFile) !== 0) {
            //$this->info('Successfully opened the archive.');
            $zipEtd->extractTo($this->strEtdExtractionPath . basename($this->strEtdFile, '.zip'));
            $zipEtd->close();
            $dirEtdFiles = new \DirectoryIterator($this->strEtdExtractionPath . basename($this->strEtdFile, '.zip'));
            $objSubmission = new ProquestSubmissionEtd;
            foreach($dirEtdFiles as $fileExtractedEtd) {
                $objSubmission->submission_path = $this->strEtdPath . basename($this->strEtdFile);
                if(!is_dir($fileExtractedEtd->getPathname())) {
                    //$this->info($fileExtractedEtd->getPathname());
                    switch($fileExtractedEtd->getExtension()) {
                        case "pdf":
                            $objSubmission->document_path = $fileExtractedEtd->getPathname();
                            break;
                        case "xml":
                            $objSubmission->metadata_path = $fileExtractedEtd->getPathname();
                            break;
                        default:
                            break;
                    }
                }
                elseif(!$fileExtractedEtd->isDot()) {
                    //$this->info('In directory ' . $fileExtractedEtd->getPathname());
                    $dirSignaturePages = new \DirectoryIterator($fileExtractedEtd->getPathname());
                    foreach($dirSignaturePages as $fileSignaturePages) {
                        if(strpos($fileSignaturePages->getBasename(), 'agree') !== FALSE) {
                            $objSubmission->university_agreement_path = $fileSignaturePages->getPathname();
                        }
                        else {
                            $objSubmission->dissertation_defense_path = $fileSignaturePages->getPathname();
                        }
                    }
                }

            }
            try {
                $objSubmission->save();
            } catch(\Exception $e) {
                $objIngestError->error_log = $e->getMessage() . ' ' . $e->getCode() . ' ' . $e->getTraceAsString();
                $objIngestError->save();
                $this->error($e->getMessage());
                //exit;
            }
            if(!rename($this->strEtdFile, $this->strEtdPath . 'processed/' . basename($this->strEtdFile))) {
                $objIngestError->error_log = 'Could not move ' . $this->strEtdFile . ' to processed/ directory.';
                $objIngestError->save();
            }
            if($objIngestError->error_log === '') {

            }
        }
        else {
            $objIngestError->ingest_file_path = $this->strEtdFile;
            $objIngestError->error_log = 'Could not open file for extraction, probably an invalid zip archive.';
            $objIngestError->save();
        }
    }

}