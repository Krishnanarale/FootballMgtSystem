<?php

use App\Activity;
use App\Player;
use App\Position;
use App\ScoreText;
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
});

Route::get('/players-list', function () {
    $players = Player::all();
    $positions = Position::all();
    return view('players.players-list', compact('players', 'positions'));
});

Route::get('/players/{player}/show', function (Player $player) {
    $position = Position::find($player->position_id);
    $activities = Activity::all();
    $scoreTexts = ScoreText::all();
    $sum = 0;
    foreach ($player->evaluations as $rating){
        $sum += $rating->score_text_id;
    }
    return view('players.player', compact('player', 'position', 'scoreTexts', 'activities', 'sum'));
});

Route::get('/about-us', 'PagesController@about'); // about page
Route::get('/contact-us', 'PagesController@contact'); // contact page
Route::post('/contact-form', 'PagesController@contactForm'); // contact form
Route::get('/terms-conditions', 'PagesController@termsConditions'); // terms and condition page
Route::get('/privacy-policy', 'PagesController@privacyPolicy'); // privacy policy page
Route::get('/trainers/create', 'Trainers\TrainersController@create');
Route::get('/compare-player', 'Players\ComparePlayerController@index');
Route::post('/compare-player', 'Players\ComparePlayerController@compare');

Auth::routes(); // Auth routes

// User Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home'); // Player dashboard
    Route::resource('players', 'Players\PlayersController');
});

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/home', 'HomeController@handleAdmin')->name('admin.route'); // Admin Dashboard
    Route::get('/players/{player}/identity-card', 'Admin\PlayersController@identityCard'); // Player Print identity card
    Route::get('/players/identity-cards', 'Admin\PlayersController@identityCards');
    Route::put('/players/{player}/evaluations/update', 'Admin\EvaluationController@update');
    Route::get('/players/{player}/evaluations/edit', 'Admin\EvaluationController@edit');

    Route::resources([
        'users' => 'Admin\UsersController',
        'players' => 'Admin\PlayersController',
        'roles' => 'Admin\RolesController',
        'permissions' => 'Admin\PermissionsController',
        'accesses' => 'Admin\AccessesController',
        'players.evaluations' => 'Admin\EvaluationController',
        'contacts' => 'Admin\ContactsController',
        'pages' => 'Admin\PageController',
        'trainers' => 'Admin\TrainersController'
    ]);
});
