<?php

namespace Mstfkhazaal\FilamentJet\Actions;

use App\Models\Team;
use App\Models\User;
use Mstfkhazaal\FilamentJet\Events\TeamMemberUpdated;
use Mstfkhazaal\FilamentJet\FilamentJet;
use Mstfkhazaal\FilamentJet\Rules\Role;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class UpdateTeamMemberRole
{
    /**
     * Update the role for the given team member.
     */
    public function update(User $user, Team $team, int $teamMemberId, string $role)
    {
        Gate::forUser($user)->authorize('updateTeamMember', $team);

        Validator::make([
            'role' => $role,
        ], [
            'role' => ['required', 'string', new Role],
        ])->validate();

        $team->users()->updateExistingPivot($teamMemberId, [
            'role' => $role,
        ]);

        TeamMemberUpdated::dispatch($team->fresh(), FilamentJet::findUserByIdOrFail($teamMemberId));
    }
}
