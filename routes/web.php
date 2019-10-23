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

use App\Http\Controllers\GameController;

Route::get('/', function () {
    return view('layouts.app');
})->name('main');
Route::get('/games', 'GameController@index');
Route::view('smail', 'page.smail');
Route::view('people', 'page.people');
Route::view('sport', 'page.sport');