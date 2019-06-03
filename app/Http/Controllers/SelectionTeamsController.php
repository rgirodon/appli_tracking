<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;



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

}
