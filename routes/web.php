<?php

use App\Http\Controllers\Players\PlayersController;
use Illuminate\Support\Facades\Route;

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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Dev routes
Route::get('/player/profile/{id}', 'Players\PlayersController@show');
Route::post('/player/profile/update/{id}', 'Players\PlayersController@update');

// Admin Routes
Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');

Route::get('admin/players', 'Players\PlayersController@index');
