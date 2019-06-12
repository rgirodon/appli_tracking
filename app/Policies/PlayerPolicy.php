<?php

namespace App\Policies;

use App\Team;
use Illuminate\Auth\Access\HandlesAuthorization;

class PlayerPolicy
{
    use HandlesAuthorization;

    public function isPlayer(Team $team)
    {
        return !is_null($team) && $team->grade === 0;
    }

    public function isGM(Team $team)
    {
        return !is_null($team) && $team->grade === 1;
    }
}
