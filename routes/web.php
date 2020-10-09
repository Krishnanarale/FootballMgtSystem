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

Route::get('/player-prifile', function () {
    return view('profile');
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

    // Roles Crud Route
    Route::get('/roles', 'Admin\RolesController@index'); // Show listing of roles
    Route::get('/role/create', 'Admin\RolesController@create'); // Show form for create role
    Route::post('/role/store', 'Admin\RolesController@store'); // Store role
    Route::get('/role/{id}/edit', 'Admin\RolesController@edit'); // Show form for edit role
    Route::post('/role/{id}/update', 'Admin\RolesController@update'); // Update role
    Route::get('/role/{id}/destroy', 'Admin\RolesController@destroy'); // Update role

    // Permission Crud Route
    Route::get('/permissions', 'Admin\PermissionsController@index'); // Show listing of permissions
    Route::get('/permission/create', 'Admin\PermissionsController@create'); // Show form for create permission
    Route::post('/permission/store', 'Admin\PermissionsController@store'); // Store permission
    Route::get('/permission/{id}/edit', 'Admin\PermissionsController@edit'); // Show form for edit permission
    Route::post('/permission/{id}/update', 'Admin\PermissionsController@update'); // Update permission
    Route::get('/permission/{id}/destroy', 'Admin\PermissionsController@destroy'); // Update permission

    // Accesses Crud Route
    // Route::resource('/accesses', Admin\AccessesController::class);
    Route::get('/accesses', 'Admin\AccessesController@index'); // Show listing of accesses
    // Route::get('/accesses/create', 'Admin\AccessesController@create'); // Show form for create accesses
    // Route::post('/accesses/store', 'Admin\AccessesController@store'); // Store accesses
    Route::get('/accesses/{id}/edit', 'Admin\AccessesController@edit'); // Show form for edit accesses
    Route::post('/accesses/{id}', 'Admin\AccessesController@update'); // Update accesses
    // Route::get('/accesses/{id}/destroy', 'Admin\AccessesController@destroy'); // Update accesses
});
