<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Rating $rating)
    {
        //
        return view('admin.ratings.edit', compact('rating'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rating $rating)
    {
        //
        // dd($request);
        $validatedData = $request->validate([
            "passing_inside_of_foot_on_ground" => "",
            "passing_outside_of_foot_on_ground" => '',
            "passing_laces_instep" => '',
            "receving_inside_of_foot" => '',
            "receving_outside_of_foot" => '',
            "receving_laces_instep" => '',
            "receving_sole" => '',
            "receving_thigh" => '',
            "receving_chest" => '',
            "receving_head" => '',
            "dribbling_for_control" => '',
            "dribbling_for_speed" => '',
            "shielding" => '',
            "feingting" => '',
            "standing_header" => '',
            "jumping_header" => '',
            "power" => '',
            "accuracy" => '',
            "laces_instep_drive" => '',
            "inside_of_foot_accuracy" => '',
            "throw_in_distance" => '',
            "throw_in_accuracy" => '',
            "flexibility_side_leg_splits" => '',
            "flexibility_lengthwise_leg_splits" => '',
            "flexibility_singal_leg_knee_bend" => '',
            "flexibility_leg_rise_and_spine_position" => '',
            "juggling_singal" => '',
            "juggling_double" => '',
            "lungs_and_planks_full_planks" => '',
            "lungs_and_planks_half_planks" => '',
            "lungs_and_planks_side_planks" => '',
            "lungs_and_planks_squats" => '',
            "lungs_and_planks_pushups" => '',
            "individual_attack_maintain_balls_position" => '',
            "individual_attack_find_space_for_self" => '',
            "individual_attack_takes_on_defender" => '',
            "individual_attack_turns_on_defender" => '',
            "individual_defense_approch_to_ball" => '',
            "individual_defense_defensive_stance" => '',
            "individual_defense_marking_distance" => '',
            "individual_defense_goal_side_position" => '',
            "individual_defense_immediate_chase" => '',
            "individual_defense_delaying_attack" => '',
            "individual_defense_channeling_attack" => '',
            "individual_defense_tackling_attack" => '',
            "comment" => '',
        ]);
        Rating::where('id', $rating->id)->update($validatedData);
        return redirect('/admin/players');
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
