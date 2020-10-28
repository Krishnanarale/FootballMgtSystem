<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        return view('admin.players.show', compact('player', 'positions', 'squads'));
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
        return view('admin.players.edit', compact('player', 'positions', 'squads'));
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
            'avatar' => 'file|image',
            'guardian_name' => 'required|max:255',
            'guardian_phone' => 'required|numeric',
            'received_by_name' => 'required|string',
            'received_by_date' => 'required',
            'received_by_register_number' => 'required|numeric',
            'received_by_squad' => 'required',
            'received_by_remark' => 'required',
        ]);
        $data = $request->all();
        // moving file
        if ($request->file('avatar') != '') {
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        } else {
            unset($data['avatar']);
        }
        unset($data['_token']);
        $data['received_by_id'] = auth()->user()->id;
        $result = Player::where('id', $player->id)->update($data);
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
