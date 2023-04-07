<?php

namespace App\Actions\FilamentJet;

use App\Models\User;
use Mstfkhazaal\FilamentJet\Contracts\UpdatesUserPasswords;
use Mstfkhazaal\FilamentJet\Traits\PasswordValidationRules;
use Illuminate\Support\Facades\Hash;

class UpdateUserPassword implements UpdatesUserPasswords
{
    use PasswordValidationRules;

    /**
     * Update the user's password.
     */
    public function update(User $user, array $input): void
    {
        $user->forceFill([
            'password' => Hash::make($input['password']),
        ])->save();
    }
}
