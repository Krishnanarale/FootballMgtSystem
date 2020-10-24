<?php

namespace App\Http\Controllers\Players;

use App\Activity;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $positions = Position::all();
        $squads = Squad::all();
        return view('players.show', compact('user', 'positions', 'squads'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
        $result = Player::where('user_id', $id)
            ->update($data);
        return ($result == 1) ? redirect('/home') : "";
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
