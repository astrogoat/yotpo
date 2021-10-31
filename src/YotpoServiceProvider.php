<?php

namespace Astrogoat\Yotpo;

use Helix\Lego\Apps\App;
use Helix\Lego\LegoManager;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Astrogoat\Yotpo\Settings\YotpoSettings;

class YotpoServiceProvider extends PackageServiceProvider
{
    public function registerApp(App $app)
    {
        return $app
            ->name('yotpo')
            ->settings(YotpoSettings::class)
            ->migrations([
                __DIR__ . '/../database/migrations/settings',
            ]);
    }

    public function registeringPackage()
    {
        $this->callAfterResolving('lego', function (LegoManager $lego) {
            $lego->registerApp(fn (App $app) => $this->registerApp($app));
        });
    }

    public function configurePackage(Package $package): void
    {
        $package->name('yotpo')->hasViews();
    }
}
