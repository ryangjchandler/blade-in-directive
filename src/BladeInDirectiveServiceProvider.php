<?php

namespace RyanChandler\BladeInDirective;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use RyanChandler\BladeInDirective\Commands\BladeInDirectiveCommand;

class BladeInDirectiveServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('blade-in-directive')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_blade-in-directive_table')
            ->hasCommand(BladeInDirectiveCommand::class);
    }
}
