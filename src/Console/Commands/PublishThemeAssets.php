<?php

namespace Resto2web\Templates\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class PublishThemeAssets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'resto2web:publish-themes-assets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publishes the themes assets (js + css)';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        $this->info('Publishing the assets');
        $this->call('vendor:publish',
            [
                '--provider'=>"Resto2web\Templates\TemplatesServiceProvider",
                '--tag'=>"assets",
                '--force'=>"true"
            ]
        );
        return 0;
    }
}
