@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Player Evaluation</h6>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="/admin/ratings/{{$rating->id}}">
                @csrf
                {{ method_field('PATCH') }}
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Skills</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2"><strong>Passing skills</strong></td>
                            </tr>
                            <tr>
                                <td>Inside of foot on ground</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="passing_inside_of_foot_on_ground" value="1" {{ ($rating->passing_inside_of_foot_on_ground == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="passing_inside_of_foot_on_ground" value="2" {{ ($rating->passing_inside_of_foot_on_ground == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="passing_inside_of_foot_on_ground" value="3" {{ ($rating->passing_inside_of_foot_on_ground == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="passing_inside_of_foot_on_ground" value="4" {{ ($rating->passing_inside_of_foot_on_ground == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="passing_inside_of_foot_on_ground" value="5" {{ ($rating->passing_inside_of_foot_on_ground == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Outside of foot on ground</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="passing_outside_of_foot_on_ground" value="1" {{ ($rating->passing_outside_of_foot_on_ground == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="passing_outside_of_foot_on_ground" value="2" {{ ($rating->passing_outside_of_foot_on_ground == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="passing_outside_of_foot_on_ground" value="3" {{ ($rating->passing_outside_of_foot_on_ground == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="passing_outside_of_foot_on_ground" value="4" {{ ($rating->passing_outside_of_foot_on_ground == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="passing_outside_of_foot_on_ground" value="5" {{ ($rating->passing_outside_of_foot_on_ground == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Laces (Instep)</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="passing_laces_instep" value="1" {{ ($rating->passing_laces_instep == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="passing_laces_instep" value="2" {{ ($rating->passing_laces_instep == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="passing_laces_instep" value="3" {{ ($rating->passing_laces_instep == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="passing_laces_instep" value="4" {{ ($rating->passing_laces_instep == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="passing_laces_instep" value="5" {{ ($rating->passing_laces_instep == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Receving Skills</strong></td>
                            </tr>
                            <tr>
                                <td>Inside of foot</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="receving_inside_of_foot" value="1" {{ ($rating->receving_inside_of_foot == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="receving_inside_of_foot" value="2" {{ ($rating->receving_inside_of_foot == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="receving_inside_of_foot" value="3" {{ ($rating->receving_inside_of_foot == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="receving_inside_of_foot" value="4" {{ ($rating->receving_inside_of_foot == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="receving_inside_of_foot" value="5" {{ ($rating->receving_inside_of_foot == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Outside of foot</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="receving_outside_of_foot" value="1" {{ ($rating->receving_outside_of_foot == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="receving_outside_of_foot" value="2" {{ ($rating->receving_outside_of_foot == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="receving_outside_of_foot" value="3" {{ ($rating->receving_outside_of_foot == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="receving_outside_of_foot" value="4" {{ ($rating->receving_outside_of_foot == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="receving_outside_of_foot" value="5" {{ ($rating->receving_outside_of_foot == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Laces (Instep)</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="receving_laces_instep" value="1" {{ ($rating->receving_laces_instep == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="receving_laces_instep" value="2" {{ ($rating->receving_laces_instep == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="receving_laces_instep" value="3" {{ ($rating->receving_laces_instep == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="receving_laces_instep" value="4" {{ ($rating->receving_laces_instep == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficientnullable">
                                            <input type="radio" class="form-check-input" name="receving_laces_instep" value="5" {{ ($rating->receving_laces_instep == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Sole</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="receving_sole" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->receving_sole == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="receving_sole" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->receving_sole == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="receving_sole" data-toggle="tooltip" title="Average" value="3" {{ ($rating->receving_sole == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="receving_sole" data-toggle="tooltip" title="Good" value="4" {{ ($rating->receving_sole == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="receving_sole" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->receving_sole == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Thigh</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="receving_thigh" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->receving_thigh == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="receving_thigh" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->receving_thigh == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="receving_thigh" data-toggle="tooltip" title="Average" value="3" {{ ($rating->receving_thigh == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="receving_thigh" data-toggle="tooltip" title="Good" value="4" {{ ($rating->receving_thigh == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="receving_thigh" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->receving_thigh == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Chest</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="receving_chest" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->receving_chest == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="receving_chest" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->receving_chest == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="receving_chest" data-toggle="tooltip" title="Average" value="3" {{ ($rating->receving_chest == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="receving_chest" data-toggle="tooltip" title="Good" value="4" {{ ($rating->receving_chest == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="receving_chest" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->receving_chest == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Head</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="receving_head" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->receving_head == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="receving_head" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->receving_head == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="receving_head" data-toggle="tooltip" title="Average" value="3" {{ ($rating->receving_head == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="receving_head" data-toggle="tooltip" title="Good" value="4" {{ ($rating->receving_head == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="receving_head" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->receving_head == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Dribling/Shielding skills</strong></td>
                            </tr>
                            <tr>
                                <td>Dribbling for Control</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="dribbling_for_control" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->dribbling_for_control == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="dribbling_for_control" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->dribbling_for_control == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="dribbling_for_control" data-toggle="tooltip" title="Average" value="3" {{ ($rating->dribbling_for_control == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="dribbling_for_control" data-toggle="tooltip" title="Good" value="4" {{ ($rating->dribbling_for_control == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="dribbling_for_control" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->dribbling_for_control == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Dribbling for Speed</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="dribbling_for_speed" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->dribbling_for_speed == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="dribbling_for_speed" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->dribbling_for_speed == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="dribbling_for_speed" data-toggle="tooltip" title="Average" value="3" {{ ($rating->dribbling_for_speed == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="dribbling_for_speed" data-toggle="tooltip" title="Good" value="4" {{ ($rating->dribbling_for_speed == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="dribbling_for_speed" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->dribbling_for_speed == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Shielding</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="shielding" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->shielding == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="shielding" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->shielding == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="shielding" data-toggle="tooltip" title="Average" value="3" {{ ($rating->shielding == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="shielding" data-toggle="tooltip" title="Good" value="4" {{ ($rating->shielding == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="shielding" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->shielding == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Feinting/Faking</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="feingting" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->feingting == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="feingting" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->feingting == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="feingting" data-toggle="tooltip" title="Average" value="3" {{ ($rating->feingting == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="feingting" data-toggle="tooltip" title="Good" value="4" {{ ($rating->feingting == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="feingting" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->feingting == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Heading skills</strong></td>
                            </tr>
                            <tr>
                                <td>Standing Header</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="standing_header" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->standing_header == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="standing_header" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->standing_header == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="standing_header" data-toggle="tooltip" title="Average" value="3" {{ ($rating->standing_header == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="standing_header" data-toggle="tooltip" title="Good" value="4" {{ ($rating->standing_header == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="standing_header" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->standing_header == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Jumping Header</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="jumping_header" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->jumping_header == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="jumping_header" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->jumping_header == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="jumping_header" data-toggle="tooltip" title="Average" value="3" {{ ($rating->jumping_header == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="jumping_header" data-toggle="tooltip" title="Good" value="4" {{ ($rating->jumping_header == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="jumping_header" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->jumping_header == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Power</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="power" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->power == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="power" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->power == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="power" data-toggle="tooltip" title="Average" value="3" {{ ($rating->power == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="power" data-toggle="tooltip" title="Good" value="4" {{ ($rating->power == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="power" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->power == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Accuracy</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="accuracy" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->accuracy == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="accuracy" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->accuracy == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="accuracy" data-toggle="tooltip" title="Average" value="3" {{ ($rating->accuracy == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="accuracy" data-toggle="tooltip" title="Good" value="4" {{ ($rating->accuracy == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="accuracy" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->accuracy == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Shooting skills</strong></td>
                            </tr>
                            <tr>
                                <td>Laces (Instep) Drive</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="laces_instep_drive" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->laces_instep_drive == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="laces_instep_drive" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->laces_instep_drive == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="laces_instep_drive" data-toggle="tooltip" title="Average" value="3" {{ ($rating->laces_instep_drive == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="laces_instep_drive" data-toggle="tooltip" title="Good" value="4" {{ ($rating->laces_instep_drive == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="laces_instep_drive" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->laces_instep_drive == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Inside of Foot (Accuracy)</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="inside_of_foot_accuracy" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->inside_of_foot_accuracy == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="inside_of_foot_accuracy" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->inside_of_foot_accuracy == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="inside_of_foot_accuracy" data-toggle="tooltip" title="Average" value="3" {{ ($rating->inside_of_foot_accuracy == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="inside_of_foot_accuracy" data-toggle="tooltip" title="Good" value="4" {{ ($rating->inside_of_foot_accuracy == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="inside_of_foot_accuracy" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->inside_of_foot_accuracy == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Throw-in skills</strong></td>
                            </tr>
                            <tr>
                                <td>Distance</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="throw_in_distance" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->throw_in_distance == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="throw_in_distance" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->throw_in_distance == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="throw_in_distance" data-toggle="tooltip" title="Average" value="3" {{ ($rating->throw_in_distance == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="throw_in_distance" data-toggle="tooltip" title="Good" value="4" {{ ($rating->throw_in_distance == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="throw_in_distance" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->throw_in_distance == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Accuracy</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="throw_in_accuracy" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->throw_in_accuracy == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="throw_in_accuracy" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->throw_in_accuracy == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="throw_in_accuracy" data-toggle="tooltip" title="Average" value="3" {{ ($rating->throw_in_accuracy == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="throw_in_accuracy" data-toggle="tooltip" title="Good" value="4" {{ ($rating->throw_in_accuracy == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="throw_in_accuracy" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->throw_in_accuracy == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Flexibility skills</strong></td>
                            </tr>
                            <tr>
                                <td>Side leg splits</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="flexibility_side_leg_splits" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->flexibility_side_leg_splits == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="flexibility_side_leg_splits" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->flexibility_side_leg_splits == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="flexibility_side_leg_splits" data-toggle="tooltip" title="Average" value="3" {{ ($rating->flexibility_side_leg_splits == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="flexibility_side_leg_splits" data-toggle="tooltip" title="Good" value="4" {{ ($rating->flexibility_side_leg_splits == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="flexibility_side_leg_splits" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->flexibility_side_leg_splits == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Lengthwise leg spilts</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="flexibility_lengthwise_leg_splits" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->flexibility_lengthwise_leg_splits == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="flexibility_lengthwise_leg_splits" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->flexibility_lengthwise_leg_splits == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="flexibility_lengthwise_leg_splits" data-toggle="tooltip" title="Average" value="3" {{ ($rating->flexibility_lengthwise_leg_splits == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="flexibility_lengthwise_leg_splits" data-toggle="tooltip" title="Good" value="4" {{ ($rating->flexibility_lengthwise_leg_splits == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="flexibility_lengthwise_leg_splits" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->flexibility_lengthwise_leg_splits == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Single legged knee bend</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="flexibility_singal_leg_knee_bend" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->flexibility_singal_leg_knee_bend == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="flexibility_singal_leg_knee_bend" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->flexibility_singal_leg_knee_bend == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="flexibility_singal_leg_knee_bend" data-toggle="tooltip" title="Average" value="3" {{ ($rating->flexibility_singal_leg_knee_bend == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="flexibility_singal_leg_knee_bend" data-toggle="tooltip" title="Good" value="4" {{ ($rating->flexibility_singal_leg_knee_bend == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="flexibility_singal_leg_knee_bend" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->flexibility_singal_leg_knee_bend == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Leg raise and spine position</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="flexibility_leg_rise_and_spine_position" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->flexibility_leg_rise_and_spine_position == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="flexibility_leg_rise_and_spine_position" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->flexibility_leg_rise_and_spine_position == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="flexibility_leg_rise_and_spine_position" data-toggle="tooltip" title="Average" value="3" {{ ($rating->flexibility_leg_rise_and_spine_position == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="flexibility_leg_rise_and_spine_position" data-toggle="tooltip" title="Good" value="4" {{ ($rating->flexibility_leg_rise_and_spine_position == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="flexibility_leg_rise_and_spine_position" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->flexibility_leg_rise_and_spine_position == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Juggling skills</strong></td>
                            </tr>
                            <tr>
                                <td>Single</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="juggling_singal" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->juggling_singal == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="juggling_singal" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->juggling_singal == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="juggling_singal" data-toggle="tooltip" title="Average" value="3" {{ ($rating->juggling_singal == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="juggling_singal" data-toggle="tooltip" title="Good" value="4" {{ ($rating->juggling_singal == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="juggling_singal" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->juggling_singal == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Double
                                </td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="juggling_double" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->juggling_double == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="juggling_double" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->juggling_double == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="juggling_double" data-toggle="tooltip" title="Average" value="3" {{ ($rating->juggling_double == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="juggling_double" data-toggle="tooltip" title="Good" value="4" {{ ($rating->juggling_double == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="juggling_double" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->juggling_double == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Lunges and planks
                                    </strong></td>
                            </tr>
                            <tr>
                                <td>Full planks

                                </td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_full_planks" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->lungs_and_planks_full_planks == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_full_planks" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->lungs_and_planks_full_planks == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_full_planks" data-toggle="tooltip" title="Average" value="3" {{ ($rating->lungs_and_planks_full_planks == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_full_planks" data-toggle="tooltip" title="Good" value="4" {{ ($rating->lungs_and_planks_full_planks == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_full_planks" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->lungs_and_planks_full_planks == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Half planks


                                </td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_half_planks" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->lungs_and_planks_half_planks == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_half_planks" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->lungs_and_planks_half_planks == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_half_planks" data-toggle="tooltip" title="Average" value="3" {{ ($rating->lungs_and_planks_half_planks == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_half_planks" data-toggle="tooltip" title="Good" value="4" {{ ($rating->lungs_and_planks_half_planks == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_half_planks" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->lungs_and_planks_half_planks == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Side planks
                                </td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_side_planks" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->lungs_and_planks_side_planks == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_side_planks" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->lungs_and_planks_side_planks == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_side_planks" data-toggle="tooltip" title="Average" value="3" {{ ($rating->lungs_and_planks_side_planks == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_side_planks" data-toggle="tooltip" title="Good" value="4" {{ ($rating->lungs_and_planks_side_planks == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_side_planks" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->lungs_and_planks_side_planks == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Squats

                                </td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_squats" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->lungs_and_planks_squats == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_squats" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->lungs_and_planks_squats == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_squats" data-toggle="tooltip" title="Average" value="3" {{ ($rating->lungs_and_planks_squats == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_squats" data-toggle="tooltip" title="Good" value="4" {{ ($rating->lungs_and_planks_squats == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_squats" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->lungs_and_planks_squats == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Pushups</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_pushups" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->lungs_and_planks_pushups == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_pushups" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->lungs_and_planks_pushups == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_pushups" data-toggle="tooltip" title="Average" value="3" {{ ($rating->lungs_and_planks_pushups == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_pushups" data-toggle="tooltip" title="Good" value="4" {{ ($rating->lungs_and_planks_pushups == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="lungs_and_planks_pushups" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->lungs_and_planks_pushups == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Individual attack</strong></td>
                            </tr>
                            <tr>
                                <td>Maintains Ball Possession
                                </td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="individual_attack_maintain_balls_position" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->individual_attack_maintain_balls_position == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="individual_attack_maintain_balls_position" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->individual_attack_maintain_balls_position == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="individual_attack_maintain_balls_position" data-toggle="tooltip" title="Average" value="3" {{ ($rating->individual_attack_maintain_balls_position == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="individual_attack_maintain_balls_position" data-toggle="tooltip" title="Good" value="4" {{ ($rating->individual_attack_maintain_balls_position == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="individual_attack_maintain_balls_position" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->individual_attack_maintain_balls_position == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Finds Space for Self

                                </td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="individual_attack_find_space_for_self" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->individual_attack_find_space_for_self == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="individual_attack_find_space_for_self" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->individual_attack_find_space_for_self == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="individual_attack_find_space_for_self" data-toggle="tooltip" title="Average" value="3" {{ ($rating->individual_attack_find_space_for_self == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="individual_attack_find_space_for_self" data-toggle="tooltip" title="Good" value="4" {{ ($rating->individual_attack_find_space_for_self == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="individual_attack_find_space_for_self" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->individual_attack_find_space_for_self == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Takes on Defender


                                </td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="individual_attack_takes_on_defender" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->individual_attack_takes_on_defender == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="individual_attack_takes_on_defender" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->individual_attack_takes_on_defender == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="individual_attack_takes_on_defender" data-toggle="tooltip" title="Average" value="3" {{ ($rating->individual_attack_takes_on_defender == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="individual_attack_takes_on_defender" data-toggle="tooltip" title="Good" value="4" {{ ($rating->individual_attack_takes_on_defender == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="individual_attack_takes_on_defender" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->individual_attack_takes_on_defender == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Turns on Defender



                                </td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="individual_attack_turns_on_defender" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->individual_attack_turns_on_defender == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="individual_attack_turns_on_defender" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->individual_attack_turns_on_defender == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="individual_attack_turns_on_defender" data-toggle="tooltip" title="Average" value="3" {{ ($rating->individual_attack_turns_on_defender == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="individual_attack_turns_on_defender" data-toggle="tooltip" title="Good" value="4" {{ ($rating->individual_attack_turns_on_defender == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="individual_attack_turns_on_defender" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->individual_attack_turns_on_defender == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><strong>Individual defense
                                    </strong></td>
                            </tr>
                            <tr>
                                <td>Approach to Ball




                                </td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="individual_defense_approch_to_ball" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->individual_defense_approch_to_ball == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="individual_defense_approch_to_ball" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->individual_defense_approch_to_ball == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="individual_defense_approch_to_ball" data-toggle="tooltip" title="Average" value="3" {{ ($rating->individual_defense_approch_to_ball == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="individual_defense_approch_to_ball" data-toggle="tooltip" title="Good" value="4" {{ ($rating->individual_defense_approch_to_ball == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="individual_defense_approch_to_ball" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->individual_defense_approch_to_ball == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Defensive Stance</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="individual_defense_defensive_stance" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->individual_defense_defensive_stance == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="individual_defense_defensive_stance" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->individual_defense_defensive_stance == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="individual_defense_defensive_stance" data-toggle="tooltip" title="Average" value="3" {{ ($rating->individual_defense_defensive_stance == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="individual_defense_defensive_stance" data-toggle="tooltip" title="Good" value="4" {{ ($rating->individual_defense_defensive_stance == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="individual_defense_defensive_stance" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->individual_defense_defensive_stance == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Marking Distance</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="individual_defense_marking_distance" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->individual_defense_marking_distance == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="individual_defense_marking_distance" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->individual_defense_marking_distance == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="individual_defense_marking_distance" data-toggle="tooltip" title="Average" value="3" {{ ($rating->individual_defense_marking_distance == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="individual_defense_marking_distance" data-toggle="tooltip" title="Good" value="4" {{ ($rating->individual_defense_marking_distance == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="individual_defense_marking_distance" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->individual_defense_marking_distance == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Goal-side Position</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="individual_defense_goal_side_position" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->individual_defense_goal_side_position == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="individual_defense_goal_side_position" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->individual_defense_goal_side_position == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="individual_defense_goal_side_position" data-toggle="tooltip" title="Average" value="3" {{ ($rating->individual_defense_goal_side_position == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="individual_defense_goal_side_position" data-toggle="tooltip" title="Good" value="4" {{ ($rating->individual_defense_goal_side_position == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="individual_defense_goal_side_position" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->individual_defense_goal_side_position == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Immediate Chase</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="individual_defense_immediate_chase" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->individual_defense_immediate_chase == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="individual_defense_immediate_chase" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->individual_defense_immediate_chase == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="individual_defense_immediate_chase" data-toggle="tooltip" title="Average" value="3" {{ ($rating->individual_defense_immediate_chase == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="individual_defense_immediate_chase" data-toggle="tooltip" title="Good" value="4" {{ ($rating->individual_defense_immediate_chase == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="individual_defense_immediate_chase" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->individual_defense_immediate_chase == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Delaying Attack</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="individual_defense_delaying_attack" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->individual_defense_delaying_attack == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="individual_defense_delaying_attack" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->individual_defense_delaying_attack == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="individual_defense_delaying_attack" data-toggle="tooltip" title="Average" value="3" {{ ($rating->individual_defense_delaying_attack == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="individual_defense_delaying_attack" data-toggle="tooltip" title="Good" value="4" {{ ($rating->individual_defense_delaying_attack == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="individual_defense_delaying_attack" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->individual_defense_delaying_attack == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Channeling Attack
                                </td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="individual_defense_channeling_attack" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->individual_defense_channeling_attack == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="individual_defense_channeling_attack" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->individual_defense_channeling_attack == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="individual_defense_channeling_attack" data-toggle="tooltip" title="Average" value="3" {{ ($rating->individual_defense_channeling_attack == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="individual_defense_channeling_attack" data-toggle="tooltip" title="Good" value="4" {{ ($rating->individual_defense_channeling_attack == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="individual_defense_channeling_attack" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->individual_defense_channeling_attack == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Tackling Attack</td>
                                <td>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="No Skills">
                                            <input type="radio" class="form-check-input" name="individual_defense_tackling_attack" data-toggle="tooltip" title="No Skills" value="1" {{ ($rating->individual_defense_tackling_attack == '1' ) ? 'checked' : ""}}>1
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Below Average">
                                            <input type="radio" class="form-check-input" name="individual_defense_tackling_attack" data-toggle="tooltip" title="Below Average" value="2" {{ ($rating->individual_defense_tackling_attack == '2' ) ? 'checked' : ""}}>2
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Average">
                                            <input type="radio" class="form-check-input" name="individual_defense_tackling_attack" data-toggle="tooltip" title="Average" value="3" {{ ($rating->individual_defense_tackling_attack == '3' ) ? 'checked' : ""}}>3
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Good">
                                            <input type="radio" class="form-check-input" name="individual_defense_tackling_attack" data-toggle="tooltip" title="Good" value="4" {{ ($rating->individual_defense_tackling_attack == '4' ) ? 'checked' : ""}}>4
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label" data-toggle="tooltip" title="Very proficient">
                                            <input type="radio" class="form-check-input" name="individual_defense_tackling_attack" data-toggle="tooltip" title="Very proficient" value="5" {{ ($rating->individual_defense_tackling_attack == '5' ) ? 'checked' : ""}}>5
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Comment</td>
                                <td><textarea name="comment" id="comment" style="width:100%" rows="3">{{ $rating->comment }}</textarea></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection