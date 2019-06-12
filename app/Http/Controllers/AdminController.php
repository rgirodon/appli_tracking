<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function login()
    {
        return view('gm.login');
    }

    function modifRiddles(Request $request)
    {
        $num = $request->input('num');
        // todo : check input
        // if ($num)
        // throw new UnauthorizedException();

        $name = $color . ' ' . $num;

        $user = Team::where('name', '=', $name)->first();

        if (is_null($user)) {
            $user = new Team();
            $user->name = $name;
            $user->grade = 0;
            $user->saveOrFail();
            $room = new Room();
            $room->name = 'Conversation ' . $name;
            $user->rooms()->save($room);
            //toDO lier la room avec les GM.
        }
        Auth::login($user);
        return redirect('/');
    }

    function logout()
    {
        Auth::logout();
        return redirect('gm/login');
    }
}
