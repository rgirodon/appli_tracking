<?php

namespace App\Policies;

use App\Riddle;
use App\Team;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class RiddlePolicy
{
    use HandlesAuthorization;

    public function validateRiddle(Team $team, Riddle $riddle){
        return !is_null($team) &&
        !is_null($riddle->teams->where('team_id', Auth::user()->id)->pivot->start_date);
    }

}
