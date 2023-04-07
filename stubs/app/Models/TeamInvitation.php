<?php

namespace App\Models;

use Mstfkhazaal\FilamentJet\FilamentJet;
use Mstfkhazaal\FilamentJet\Models\TeamInvitation as FilamentJetTeamInvitation;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeamInvitation extends FilamentJetTeamInvitation
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string<int, string>
     */
    protected $fillable = [
        'email',
        'role',
    ];

    /**
     * Get the team that the invitation belongs to.
     */
    public function team(): BelongsTo
    {
        return $this->belongsTo(FilamentJet::teamModel());
    }
}
