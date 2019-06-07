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

Route::get('/', function () {
    return view('welcome');
});

// test onglets
Route::get('/demo/onglets', function () {
    return view('tabs', ['title' => 'Onglets']);
});

// test gm_team
Route::get('/demo/team', function () {
    return view('gm_team', ['title' => 'Équipe']);
});

// test player_riddle
Route::get('/demo/player_riddle', function () {
    return view('player_riddle', ['title' => 'Joueur énigme']);
});