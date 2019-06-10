<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TeamController extends Controller
{
    public function login()
    {
        return view('player.login', ['logout_url' => 'player/logout']);
    }

    function checklogin(Request $request)
    {
        $this->validate($request, [
            'color' => 'required',
            'num' => 'required'
        ]);

        $name = $request->input('color') . $request->input('num');

        $user = Team::where('name', '=', $name)->first();

        if (is_null($user)) {
            $user = new Team();
            $user->name = $name;
            $user->isGM = false;
            $user->saveOrFail();
            //toDO creer la room et la lier avec les GM.
        }
        Auth::login($user);
        return redirect('/');
    }

    function home()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->getAttribute('isGM')) {
                return view('gm.home', ['logout_url' => 'player/logout']);
            } else {
                return view('player.home', ['logout_url' => 'player/logout']);
            }
        } else
            return redirect('player/login');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
