<?php

namespace App\Providers;

use Mstfkhazaal\FilamentJet\FilamentJet;
use Mstfkhazaal\FilamentJet\FilamentJetServiceProvider as BaseFilamentJetServiceProvider;

class FilamentJetServiceProvider extends BaseFilamentJetServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->configurePermissions();
    }

    /**
     * Configure the permissions that are available within the application.
     */
    protected function configurePermissions(): void
    {
        FilamentJet::defaultApiTokenPermissions(['read']);

        FilamentJet::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
