<?php

namespace App\Actions\FilamentJet;

use App\Models\Team;
use Mstfkhazaal\FilamentJet\Contracts\CreatesNewUsers;
use Mstfkhazaal\FilamentJet\Features;
use Mstfkhazaal\FilamentJet\FilamentJet;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateNewUser implements CreatesNewUsers
{
    /**
     * Create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): Model|Authenticatable
    {
        return DB::transaction(function () use ($input) {
            return tap(FilamentJet::userModel()::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ]), function ($user) {

                if (Features::enabled(Features::emailVerification())) {
                    app()->bind(
                        \Illuminate\Auth\Listeners\SendEmailVerificationNotification::class,
                        \Mstfkhazaal\FilamentJet\Listeners\Auth\SendEmailVerificationNotification::class,
                    );
                }

                event(new Registered($user));

                if (Features::hasTeamFeatures()) {
                    $this->createTeam($user);
                }

                return $user;
            });
        });
    }

    /**
     * Create a personal team for the user.
     *
     * @param  Model|Authenticatable  $user
     */
    protected function createTeam(Model|Authenticatable $user): void
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->getKey(),
            'name' => explode(' ', $user->name, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }
}
