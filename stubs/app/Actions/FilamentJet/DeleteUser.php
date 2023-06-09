<?php

namespace App\Actions\FilamentJet;

use App\Models\User;
use Mstfkhazaal\FilamentJet\Contracts\DeletesUsers;

class DeleteUser implements DeletesUsers
{
    /**
     * Delete the given user.
     */
    public function delete(User $user): void
    {
        $user->deleteProfilePhoto();
        $user->tokens->each->delete();
        $user->delete();
    }
}
