<?php

namespace Mstfkhazaal\FilamentJet\Actions;

use Mstfkhazaal\FilamentJet\Events\RecoveryCodesGenerated;
use Mstfkhazaal\FilamentJet\RecoveryCode;
use Illuminate\Support\Collection;

class GenerateNewRecoveryCodes
{
    /**
     * Generate new recovery codes for the user.
     *
     * @param  mixed  $user
     * @return void
     */
    public function __invoke($user)
    {
        $user->forceFill([
            'two_factor_recovery_codes' => encrypt(json_encode(Collection::times(8, function () {
                return RecoveryCode::generate();
            })->all())),
        ])->save();

        RecoveryCodesGenerated::dispatch($user);
    }
}
