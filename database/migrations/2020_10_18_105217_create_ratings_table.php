<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->integer('passing_inside_of_foot_on_ground')->nullable();
            $table->integer('passing_outside_of_foot_on_ground')->nullable();
            $table->integer('passing_laces_instep')->nullable();
            $table->integer('receving_inside_of_foot')->nullable();
            $table->integer('receving_outside_of_foot')->nullable();
            $table->integer('receving_laces_instep')->nullable();
            $table->integer('receving_sole')->nullable();
            $table->integer('receving_thigh')->nullable();
            $table->integer('receving_chest')->nullable();
            $table->integer('receving_head')->nullable();
            $table->integer('dribbling_for_control')->nullable();
            $table->integer('dribbling_for_speed')->nullable();
            $table->integer('shielding')->nullable();
            $table->integer('feingting')->nullable();
            $table->integer('standing_header')->nullable();
            $table->integer('jumping_header')->nullable();
            $table->integer('power')->nullable();
            $table->integer('accuracy')->nullable();
            $table->integer('laces_instep_drive')->nullable();
            $table->integer('inside_of_foot_accuracy')->nullable();
            $table->integer('throw_in_distance')->nullable();
            $table->integer('throw_in_accuracy')->nullable();
            $table->integer('flexibility_side_leg_splits')->nullable();
            $table->integer('flexibility_lengthwise_leg_splits')->nullable();
            $table->integer('flexibility_singal_leg_knee_bend')->nullable();
            $table->integer('flexibility_leg_rise_and_spine_position')->nullable();
            $table->integer('juggling_singal')->nullable();
            $table->integer('juggling_double')->nullable();
            $table->integer('lungs_and_planks_full_planks')->nullable();
            $table->integer('lungs_and_planks_half_planks')->nullable();
            $table->integer('lungs_and_planks_side_planks')->nullable();
            $table->integer('lungs_and_planks_squats')->nullable();
            $table->integer('lungs_and_planks_pushups')->nullable();
            $table->integer('individual_attack_maintain_balls_position')->nullable();
            $table->integer('individual_attack_find_space_for_self')->nullable();
            $table->integer('individual_attack_takes_on_defender')->nullable();
            $table->integer('individual_attack_turns_on_defender')->nullable();
            $table->integer('individual_defense_approch_to_ball')->nullable();
            $table->integer('individual_defense_defensive_stance')->nullable();
            $table->integer('individual_defense_marking_distance')->nullable();
            $table->integer('individual_defense_goal_side_position')->nullable();
            $table->integer('individual_defense_immediate_chase')->nullable();
            $table->integer('individual_defense_delaying_attack')->nullable();
            $table->integer('individual_defense_channeling_attack')->nullable();
            $table->integer('individual_defense_tackling_attack')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}
