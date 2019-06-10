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
//Route::get('validationEnigme', 'ValidationEnigmeController@Index'); // todo check gaetan : normalement plus utile
Route::get('riddle/list', 'RiddleController@listRiddles');
Route::get('riddle/{id}/start', 'RiddleController@startRiddle');
Route::get('validationEnigme', 'ValidationEnigmeController@Index');
Route::get('validationEnigme/validationMdp', 'ValidationMdpController@checkMdp');
Route::get('validationEnigme/validationMdp/{id}', 'ValidationMdpController@checkMdp');

// RiddlesTeams
Route::get('riddleteam/list', 'RiddleTeamController@listRiddlesTeams');

// Player
Route::get('player/', 'PlayerController@home');