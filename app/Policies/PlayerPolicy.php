<?php

namespace App\Policies;

use App\Team;
use Illuminate\Auth\Access\HandlesAuthorization;

class PlayerPolicy
{
    use HandlesAuthorization;

    public function home(Team $team){
        return !is_null($team) && !$team->isGM;
    }
}
