<?php

namespace App\Policies;

use App\Room;
use App\Team;
use Illuminate\Auth\Access\HandlesAuthorization;

class MessengerPolicy
{
    use HandlesAuthorization;


    public function sendmessage(Team $team, Room $room)
    {
        return $room->teams()->where('teams.id', $team->id)->exists();
    }
}
