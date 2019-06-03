<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class SelectionTeamsController extends Controller
{
    public function index()
    {
        return view('SelectionTeams');
    }

    public function postForm(ContactRequest $request)
    {
        return view('confirm');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
