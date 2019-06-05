<?php

namespace App\Http\Controllers;

use App\Riddle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ValidationMdpController extends Controller
{


    function checkMdp($id, Request $request)
    {
        $riddledb=Riddle::find($id);
        $this->authorize('validateRiddle', $riddledb);

        if ($riddledb->code == $request->input('code'))
        {
            $riddledb->teams->where('id', Auth::user()->id)->first()->pivot->end_date = now();

        }






        /*$this->validate($request, [
            'password' => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'password' => $request->get('password')
        );

        if (Auth::attempt($user_data)) {
            return redirect('/validationEnigme');
        } else {
            return back()->with('error', 'Wrong Login Details');
        }*/

    }

}