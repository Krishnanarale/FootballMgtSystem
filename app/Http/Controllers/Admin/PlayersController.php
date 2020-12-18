<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\PlayerHasPositions;
use Illuminate\Http\Request;
use App\Player;
use App\Position;
use App\Squad;
use App\User;
use Illuminate\Http\Response;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $players = Player::all();
        return view('admin.players.index', compact('players', $players));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Player $player
     * @return Response
     */
    public function show(Player $player)
    {
        //
        $positions = Position::all();
        $squads = Squad::all();
        $hasPositions = PlayerHasPositions::where('player_id', $player->id)->get();
        $check = [];
        foreach ($hasPositions as $hp) {
            array_push($check, $hp->position_id);
        }
        return view('admin.players.show', compact('player', 'positions', 'squads', 'check'));
    }

    /**
     * Print Identity Card specified resource.
     *
     * @param Player $player
     * @return Response
     */
    public function identityCard(Player $player)
    {
        return view('admin.players.identity-card', compact('player'));
    }

    public function identityCards()
    {
        $players = Player::all();
        return view('admin.players.identity-cards', compact('players'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Player $player
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function edit(Player $player)
    {
        $positions = Position::all();
        $squads = Squad::all();
        $hasPositions = PlayerHasPositions::where('player_id', $player->id)->get();
        $check = [];
        foreach ($hasPositions as $hp) {
            array_push($check, $hp->position_id);
        }
        return view('admin.players.edit', compact('player', 'positions', 'squads', 'check'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Player $player)
    {
        //
        $validatedData = $request->validate([
            'date_of_birth' => 'required|date',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'avatar' => 'image|dimensions:min_width=300,min_height=300,max_width=1000,max_height=1000',
            'document_one' => 'mimes:doc,pdf,docx,jpeg,jpg,png',
            'document_two' => 'mimes:doc,pdf,docx,jpeg,jpg,png',
            'document_three' => 'mimes:doc,pdf,docx,jpeg,jpg,png',
            'guardian_name' => 'required|max:255',
            'guardian_phone' => 'required|numeric',
            'received_by_name' => 'required|string',
            'received_by_date' => 'required',
            'received_by_register_number' => 'required|numeric',
            'received_by_squad' => 'required',
            'received_by_remark' => 'required',
        ]);
        $data = $request->all();
        $positions = array();
        if (!empty($data['positions'])) {
            $positions = $data['positions'];
            unset($data['positions']);
        }
        // moving file
        if ($request->file('avatar') != '') {
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        } else {
            unset($data['avatar']);
        }
        if ($request->file('document_one') != '') {
            $data['document_one'] = $request->file('document_one')->store('document_one', 'public');
        } else {
            unset($data['document_one']);
        }
        if ($request->file('document_two') != '') {
            $data['document_two'] = $request->file('document_two')->store('document_two', 'public');
        } else {
            unset($data['document_two']);
        }
        if ($request->file('document_three') != '') {
            $data['document_three'] = $request->file('document_three')->store('document_three', 'public');
        } else {
            unset($data['document_three']);
        }
        unset($data['_token']);
        unset($data['_method']);
        $data['received_by_id'] = auth()->user()->id;
        $result = Player::where('id', $player->id)->update($data);
        if ($result) {
            PlayerHasPositions::where('player_id', $player->id)->delete();
            foreach ($positions as $key => $position) {
                PlayerHasPositions::create(['player_id' => $player->id, 'position_id' => $position]);
            }
        }
        return ($result == 1) ? redirect('/admin/players') : "";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
