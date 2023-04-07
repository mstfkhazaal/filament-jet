<?php

namespace Mstfkhazaal\FilamentJet\Http\Responses\Auth;

use Mstfkhazaal\FilamentJet\Http\Responses\Auth\Contracts\PasswordResetResponse as Responsable;
use Filament\Facades\Filament;
use Illuminate\Http\RedirectResponse;
use Livewire\Redirector;

class PasswordResetResponse implements Responsable
{
    public function toResponse($request): RedirectResponse|Redirector
    {
        return redirect()->to(Filament::getUrl());
    }
}
