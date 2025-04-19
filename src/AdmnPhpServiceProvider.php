<?php

namespace Admn\AdmnPhp;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Admn\AdmnPhp\Commands\AdmnPhpCommand;

class AdmnPhpServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('admn-php-client')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_admn_php_client_table')
            ->hasCommand(AdmnPhpCommand::class);
    }
}
