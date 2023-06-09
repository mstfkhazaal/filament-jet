<?php

namespace App\Actions\FilamentJet;

use App\Models\Team;
use App\Models\User;
use Mstfkhazaal\FilamentJet\Contracts\InvitesTeamMembers;
use Mstfkhazaal\FilamentJet\Events\InvitingTeamMember;
use Mstfkhazaal\FilamentJet\Mail\TeamInvitation;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class InviteTeamMember implements InvitesTeamMembers
{
    /**
     * Invite a new team member to the given team.
     */
    public function invite(User $user, Team $team, string $email, string $role = null): void
    {
        Gate::forUser($user)->authorize('addTeamMember', $team);

        InvitingTeamMember::dispatch($team, $email, $role);

        $invitation = $team->teamInvitations()->create([
            'email' => $email,
            'role' => $role,
        ]);

        Mail::to($email)->send(new TeamInvitation($invitation));
    }
}
