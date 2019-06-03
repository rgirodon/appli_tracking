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

Route::get('/', 'SelectionTeamsController@index');
Route::post('/', 'SelectionTeamsController@postForm');
Route::get('joueur/logout', 'SelectionTeamsController@logout');

Route::get('/gm/login', 'GameMasterController@index');
Route::post('/gm/checklogin', 'GameMasterController@checklogin');
Route::get('gm', 'GameMasterController@successlogin');
Route::get('gm/logout', 'GameMasterController@logout');
