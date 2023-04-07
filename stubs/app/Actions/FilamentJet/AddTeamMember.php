<?php

namespace App\Actions\FilamentJet;

use App\Models\Team;
use App\Models\User;
use Mstfkhazaal\FilamentJet\Contracts\AddsTeamMembers;
use Mstfkhazaal\FilamentJet\Events\AddingTeamMember;
use Mstfkhazaal\FilamentJet\Events\TeamMemberAdded;
use Mstfkhazaal\FilamentJet\FilamentJet;
use Illuminate\Support\Facades\Gate;

class AddTeamMember implements AddsTeamMembers
{
    /**
     * Add a new team member to the given team.
     */
    public function add(User $user, Team $team, string $email, string $role = null): void
    {
        Gate::forUser($user)->authorize('addTeamMember', $team);

        $newTeamMember = FilamentJet::findUserByEmailOrFail($email);

        AddingTeamMember::dispatch($team, $newTeamMember);

        $team->users()->attach(
            $newTeamMember, ['role' => $role]
        );

        TeamMemberAdded::dispatch($team, $newTeamMember);
    }
}
