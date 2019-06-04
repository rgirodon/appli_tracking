<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ValidationMdpController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    function checkMdp(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'password' => $request->get('password')
        );

        if (Auth::attempt($user_data)) {
            return redirect('/validationEnigme');
        } else {
            return back()->with('error', 'Wrong Login Details');
        }

    }

}