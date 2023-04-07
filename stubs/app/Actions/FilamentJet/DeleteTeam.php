<?php

namespace App\Actions\FilamentJet;

use App\Models\Team;
use Mstfkhazaal\FilamentJet\Contracts\DeletesTeams;

class DeleteTeam implements DeletesTeams
{
    /**
     * Delete the given team.
     */
    public function delete(Team $team): void
    {
        $team->purge();
    }
}
