<?php

namespace App\Models;

use Mstfkhazaal\FilamentJet\Events\TeamCreated;
use Mstfkhazaal\FilamentJet\Events\TeamDeleted;
use Mstfkhazaal\FilamentJet\Events\TeamUpdated;
use Mstfkhazaal\FilamentJet\Models\Team as FilamentJetTeam;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends FilamentJetTeam
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'personal_team' => 'boolean',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var string<int, string>
     */
    protected $fillable = [
        'name',
        'personal_team',
    ];

    /**
     * The event map for the model.
     *
     * @var array<string, class-string>
     */
    protected $dispatchesEvents = [
        'created' => TeamCreated::class,
        'updated' => TeamUpdated::class,
        'deleted' => TeamDeleted::class,
    ];
}
