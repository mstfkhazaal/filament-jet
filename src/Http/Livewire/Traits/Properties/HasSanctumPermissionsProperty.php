<?php

namespace Mstfkhazaal\FilamentJet\Http\Livewire\Traits\Properties;

use Mstfkhazaal\FilamentJet\FilamentJet;

trait HasSanctumPermissionsProperty
{
    public function getSanctumPermissionsProperty()
    {
        return collect(FilamentJet::$permissions)
            ->mapWithKeys(function ($permission) {
                return [$permission => $permission];
            });
    }
}
