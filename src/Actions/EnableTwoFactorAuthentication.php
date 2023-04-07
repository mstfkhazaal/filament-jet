<?php

namespace Mstfkhazaal\FilamentJet\Actions;

use Mstfkhazaal\FilamentJet\Contracts\TwoFactorAuthenticationProvider;
use Mstfkhazaal\FilamentJet\Events\TwoFactorAuthenticationEnabled;
use Mstfkhazaal\FilamentJet\RecoveryCode;
use Illuminate\Support\Collection;

class EnableTwoFactorAuthentication
{
    /**
     * The two factor authentication provider.
     *
     * @var \Mstfkhazaal\FilamentJet\Contracts\TwoFactorAuthenticationProvider
     */
    protected $provider;

    /**
     * Create a new action instance.
     *
     * @param  \Mstfkhazaal\FilamentJet\Contracts\TwoFactorAuthenticationProvider  $provider
     * @return void
     */
    public function __construct(TwoFactorAuthenticationProvider $provider)
    {
        $this->provider = $provider;
    }

    /**
     * Enable two factor authentication for the user.
     *
     * @param  mixed  $user
     * @return void
     */
    public function __invoke($user)
    {
        $user->forceFill([
            'two_factor_secret' => encrypt($this->provider->generateSecretKey()),
            'two_factor_recovery_codes' => encrypt(json_encode(Collection::times(8, function () {
                return RecoveryCode::generate();
            })->all())),
        ])->save();

        TwoFactorAuthenticationEnabled::dispatch($user);
    }
}
