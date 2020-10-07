<?php

use App\Http\Controllers\Players\PlayersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('front.welcome');
}); // Welcom page/ ladning page

Route::get('/players-list', function () {
    return view('playersList');
}); // Players Listing with cards for front

Route::get('/player', function () {
    return view('player');
}); // Players Listing with cards for front

Auth::routes(); // Auth routes

// User Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home'); // Player dashboard

    Route::get('/player/profile/{id}', 'Players\PlayersController@show'); // Show's profile form
    Route::post('/player/profile/update/{id}', 'Players\PlayersController@update'); // update profile
});

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/home', 'HomeController@handleAdmin')->name('admin.route'); // Admin Dashboard

    Route::get('/players', 'Players\PlayersController@index'); // Player listing
    Route::get('/player/{id}/edit', 'Players\PlayersController@edit'); // Player Edit form

    Route::get('/users', 'Admin\UsersController@index'); // Users listing
    Route::get('/user/{id}/edit', 'Admin\UsersController@edit'); // User Edit form
    Route::post('/user/{id}/update', 'Admin\UsersController@update'); // Update User
    Route::get('/user/{id}/destroy', 'Admin\UsersController@destroy'); // Soft Deleting User
});
