<?php

use App\Http\Controllers\Players\PlayersController;
use App\Player;
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
    $players = Player::all();
    return view('players.players-list', compact('players'));
}); // Players Listing with cards for front

Route::get('/players/{id}/show', function ($id) {
    $player = Player::find($id);
    return view('players.player', compact('player'));
}); // Singal Player for front

Route::get('/about-us', 'PagesController@about'); // about page

Route::get('/contact-us', 'PagesController@contact'); // contact page
Route::post('/contact-form', 'PagesController@contactForm'); // contact form

Route::get('/trainers/create', 'Trainers\TrainersController@create');

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

    Route::get('/players', 'Admin\PlayersController@index'); // Player listing
    Route::get('/player/{id}/show', 'Admin\PlayersController@show'); // Player Print form
    Route::get('/player/{id}/identity-card', 'Admin\PlayersController@identityCard'); // Player Print identity card
    Route::get('/player/{id}/edit', 'Admin\PlayersController@edit'); // Player Edit form
    Route::post('/player/{id}/update', 'Admin\PlayersController@update'); // Player update

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

    // Contacts Crud Route
    Route::resource('contacts', Admin\ContactsController::class);
    // Pages Crud Route
    Route::resource('pages', Admin\PageController::class);

    // Trainers Crud Route
    Route::resource('trainers', Admin\TrainersController::class);
});
