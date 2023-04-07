<?php

namespace App\Actions\FilamentJet;

use App\Models\Team;
use App\Models\User;
use Mstfkhazaal\FilamentJet\Contracts\CreatesTeams;
use Mstfkhazaal\FilamentJet\Events\AddingTeam;
use Mstfkhazaal\FilamentJet\FilamentJet;
use Illuminate\Support\Facades\Gate;

class CreateTeam implements CreatesTeams
{
    /**
     * Validate and create a new team for the given user.
     *
     * @param  array<string, string>  $input
     */
    public function create(User $user, array $input): Team
    {
        Gate::forUser($user)->authorize('create', FilamentJet::newTeamModel());

        AddingTeam::dispatch($user);

        $user->switchTeam($team = $user->ownedTeams()->create([
            'name' => $input['name'],
            'personal_team' => false,
        ]));

        return $team;
    }
}
