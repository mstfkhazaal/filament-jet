<?php

namespace Mstfkhazaal\FilamentJet;

class Jet
{
    public function getTwoFactorLoginSessionPrefix(): string
    {
        return Features::getOption(Features::twoFactorAuthentication(), 'authentication.session_prefix');
    }
}
