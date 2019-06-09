<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Support\Facades\Auth;

class PlayerController extends Controller
{
    public function home()
    {
        $this->authorize('home', Team::class);

        $team = Auth::user();

        return view('player/player_riddle')->withTitle($team->getAttribute('name'));
    }

}