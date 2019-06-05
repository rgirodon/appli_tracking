<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SelectionTeamsController extends Controller
{
    public function index()
    {
        return view('auth.loginTeams');
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

    function successlogin()
    {
        if (Auth::check())
            return view('auth.successLoginTeams');
        else if (Auth::check())
            return redirect('/');
        else
            return redirect('player/login');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
