<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Player Login :
Route::get('/', 'TeamController@home');
Route::get('player/login', 'TeamController@login');
Route::post('player/checklogin', 'TeamController@checklogin');
Route::get('player/logout', 'TeamController@logout');

// GameMaster Login :
Route::get('gm', 'GameMasterController@home');
Route::get('gm/login', 'GameMasterController@login');
Route::post('gm/checklogin', 'GameMasterController@checklogin');
Route::get('gm/logout', 'GameMasterController@logout');

// Messenger
Route::post('msg/send/{room}', 'MessengerController@sendMessage');
Route::get('msg/{room}', 'MessengerController@getMessages');

// Riddle
Route::get('validationEnigme', 'ValidationEnigmeController@Index');
Route::get('validationEnigme/validationMdp', 'ValidationMdpController@checkMdp');
Route::get('validationEnigme/validationMdp/{id}', 'ValidationMdpController@checkMdp');


// Temporaire (Démo)
Route::get('/demo/onglets', function () {
    return view('tabs', ['title' => 'Onglets']);
});

Route::get('/demo/team', function () {
    return view('gm_team', ['title' => 'Équipe']);
});

// test player_riddle
Route::get('/demo/player_riddle', function () {
    return view('player_riddle', ['title' => 'Joueur énigme']);
});