<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config as FacadesConfig;
use League\Flysystem\Config as FlysystemConfig;
use Config;

class MakeMultipleViews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:multiple-views';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create multiple views at once';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $views = Config::get('views.views');

        foreach ($views as $view) {
            Artisan::call('make:view', ['name' => $view]);
        }

        $this->info('Views created successfully.');
    }
}
