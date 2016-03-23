<?php

namespace DoiAssistant\Console\Commands;

use DoiAssistant\EtdIngestError;
use DoiAssistant\Jobs\IngestEtd;
use DoiAssistant\ProquestSubmissionEtd;
use Illuminate\Console\Command;
use Illuminate\Foundation\Bus\DispatchesJobs;
use PhpParser\Node\Scalar\MagicConst\Dir;
use Symfony\Component\Routing\Exception\MissingMandatoryParametersException;

class DiscoverEtds extends Command
{
    use DispatchesJobs;
    protected $strEtdPath;
    protected $strEtdExtractionPath;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'etds:discover';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Find ETD submissions and queue them for processing.';

    /**
     * Create a new command instance.
     *
     * @return void
     * @throws MissingMandatoryParametersException
     */
    public function __construct()
    {
        $this->strEtdPath = env("ETD_STORAGE");
        $this->strEtdExtractionPath = env("ETD_EXTRACTION");
        if ($this->strEtdPath === '') {
            throw new MissingMandatoryParametersException('Environment variable must be set for ETD_STORAGE');
        }
        if($this->strEtdExtractionPath === '') {
            throw new MissingMandatoryParametersException('Environment variable must be set for ETD_EXTRACTION');
        }
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $dirEtdStorage = new \DirectoryIterator($this->strEtdPath);

        foreach ($dirEtdStorage as $fileEtd) {
            if (!$fileEtd->isDot() && !$fileEtd->isDir()) {
                $this->info($fileEtd->getPathname());
                $zipEtd = new \ZipArchive();
                if($zipEtd->open($fileEtd->getPathname()) === TRUE) {
                    $this->info('Pushing ' . $fileEtd->getPathname() . ' onto the queue.');
                    $this->dispatch(new IngestEtd($fileEtd->getPathname()));
                }
            }
        }
    }
}