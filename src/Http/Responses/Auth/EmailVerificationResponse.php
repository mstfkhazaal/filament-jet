<?php

namespace Mstfkhazaal\FilamentJet\Http\Responses\Auth;

use Mstfkhazaal\FilamentJet\Http\Responses\Auth\Contracts\EmailVerificationResponse as Responsable;
use Filament\Facades\Filament;
use Illuminate\Http\RedirectResponse;
use Livewire\Redirector;

class EmailVerificationResponse implements Responsable
{
    public function toResponse($request): RedirectResponse|Redirector
    {
        return redirect()->intended(Filament::getUrl());
    }
}
