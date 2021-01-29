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
})->name('home');

Route::get('auth/steam', 'Auth\AuthController@redirectToSteam')->name('auth.steam');
Route::get('auth/steam/handle', 'Auth\AuthController@handle')->name('auth.steam.handle');
Route::get('auth/logout', 'Auth\AuthController@logout')->name('logout');
Route::get('search', 'SearchController@getSearch')->name('search');
Route::get('search/results', 'SearchController@search')->name('search.results');
Route::get('player/results', 'SearchController@search')->name('search.results');

Route::get('player/{player}', 'PlayerController@player')->name('player.player');

// Static content
Route::get('about', 'StaticController@about')->name('static.about');


Route::prefix('user')->middleware(['auth'])->group(function () {
    Route::get('dashboard', 'UserController@getDashboard')->name('user.dashboard');
    Route::prefix('server')->middleware(['is.inteam'])->group(function () {
        Route::get('{team}/{server}', 'ServerController@getServer')->name('server.dashboard');
    });
});
