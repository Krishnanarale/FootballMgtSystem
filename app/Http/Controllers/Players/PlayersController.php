<?php

namespace App\Http\Controllers\Players;

use App\Activity;
use App\Evaluation;
use App\PlayerHasPositions;
use App\ScoreText;
use App\User;
use App\Squad;
use App\Player;
use App\Position;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlayersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Player $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Player $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        $positions = Position::all();
        $squads = Squad::all();
        $activities = Activity::all();
        $scoreTexts = ScoreText::all();
        $sum = 0;
        foreach ($player->evaluations as $rating){
            $sum += $rating->score_text_id;
        }
        $hasPositions = PlayerHasPositions::where('player_id', $player->id)->get();
        $check = [];
        foreach ($hasPositions as $hp) {
            array_push($check, $hp->position_id);
        }
        return view('players.edit', compact('player', 'positions', 'squads', 'check', 'activities', 'scoreTexts', 'sum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Player $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        $validatedData = $request->validate([
            'date_of_birth' => 'required|date',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'avatar' => 'image',
            'foot' => 'required',
            'contract_copy' => 'file',
            'guardian_name' => 'required|max:255',
            'guardian_phone' => 'required|numeric',
        ]);
        $data = $request->all();
        $positions = array();
        if ($data['positions'] != '') {
            $positions = $data['positions'];
            unset($data['positions']);
        }
        // moving file
        if ($request->file('avatar') != '') {
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        } else {
            unset($data['avatar']);
        }
        if ($request->file('contract_copy') != '') {
            $data['contract_copy'] = $request->file('contract_copy')->store('contracts', 'public');
        } else {
            unset($data['contract_copy']);
        }
        unset($data['_token']);
        unset($data['_method']);
        $result = Player::where('id', $player->id)
            ->update($data);
        if ($result) {
            PlayerHasPositions::where('player_id', $player->id)->delete();
            foreach ($positions as $key => $position) {
                PlayerHasPositions::create(['player_id' => $player->id, 'position_id' => $position]);
            }
        }
        return redirect()->back()->with('status', 'Profile updated!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
