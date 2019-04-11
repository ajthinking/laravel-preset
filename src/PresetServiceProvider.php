<?php

namespace Ajthinking\LaravelPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class PresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        PresetCommand::macro('ajthinking', function ($command) {
            Preset::install();

            $command->info('Ajthinking scaffolding installed successfully.');
            $command->info('Please run "yarn && yarn dev" to compile your fresh scaffolding.');
        });
    }
}
