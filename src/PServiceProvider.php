<?php

namespace FaSe22\P;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use FaSe22\P\Commands\PCommand;

class PServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('p')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_p_table')
            ->hasCommand(PCommand::class);
    }
}
