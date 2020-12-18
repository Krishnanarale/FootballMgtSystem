<?php

namespace App\Http\Controllers\Players;

use App\Http\Controllers\Controller;
use App\Player;
use App\Position;
use App\User;
use Illuminate\Http\Request;

class ComparePlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view('players.compare.index', compact('players'));
    }

    public function compare(Request $request) {
        $validatedData = $request->validate([
            'player1' => 'required',
            'player2' => 'required',
            'player3' => 'required',
        ]);
        $userOne = User::find($validatedData['player1']);
        $userTwo = User::find($validatedData['player2']);
        $userThree = User::find($validatedData['player3']);
        $positions = Position::all();
        return view('players.compare.compare', compact('userOne', 'userTwo', 'userThree', 'positions'));
    }
}
