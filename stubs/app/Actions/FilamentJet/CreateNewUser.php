<?php

namespace App\Actions\FilamentJet;

use App\Models\User;
use Mstfkhazaal\FilamentJet\Contracts\CreatesNewUsers;
use Mstfkhazaal\FilamentJet\FilamentJet;
use Illuminate\Support\Facades\Hash;

class CreateNewUser implements CreatesNewUsers
{
    /**
     * Create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        return FilamentJet::userModel()::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
