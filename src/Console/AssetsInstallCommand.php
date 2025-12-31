<?php

declare(strict_types=1);

namespace AhwetSen\AssetFiles\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

final class AssetsInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'asset-files:assets-install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the asset-files assets files';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->assets();
    }

    /**
     * Assets.
     */
    protected function assets(): void
    {
        (new Filesystem)->copyDirectory(__DIR__.'/../../assets', public_path('vendor/asset-files'));

        $this->info('     -----> The asset file publishing process has been successfully completed.');
    }
}
