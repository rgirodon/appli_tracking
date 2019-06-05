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
Route::get('player/login', 'SelectionTeamsController@index');
Route::post('player/checklogin', 'SelectionTeamsController@checklogin');
Route::get('/', 'SelectionTeamsController@successlogin');
Route::get('player/logout', 'SelectionTeamsController@logout');

Route::get('/onglets', function () {
    return view('tabs', ['title' => 'Onglets']);
});

Route::get('/team', function () {
    return view('gm_team', ['title' => 'Équipe']);
});

Route::post('msg/send/{room}', 'MessengerController@sendMessage');
Route::get('msg/{room}', 'MessengerController@getMessages');

Auth::routes();

// GameMaster Login :
Route::get('gm/login', 'GameMasterController@index');
Route::post('gm/checklogin', 'GameMasterController@checklogin');
Route::get('gm', 'GameMasterController@successlogin');
Route::get('gm/logout', 'GameMasterController@logout');

Route::get('/home', 'HomeController@index')->name('home');
