<?php

use App\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $skills = [
            ['activity_id' => 1, 'name' => 'Inside of foot on ground'],
            ['activity_id' => 1, 'name' => 'Outside of foot on ground'],
            ['activity_id' => 1, 'name' => 'Laces (Instep)'],
            ['activity_id' => 2, 'name' => 'Inside of foot'],
            ['activity_id' => 2, 'name' => 'Outside of foot'],
            ['activity_id' => 2, 'name' => 'Laces (Instep)'],
            ['activity_id' => 2, 'name' => 'Sole'],
            ['activity_id' => 2, 'name' => 'Thigh'],
            ['activity_id' => 2, 'name' => 'Chest'],
            ['activity_id' => 2, 'name' => 'Head'],
            ['activity_id' => 3, 'name' => 'Dribbling for Control'],
            ['activity_id' => 3, 'name' => 'Dribbling for Speed'],
            ['activity_id' => 3, 'name' => 'Shielding'],
            ['activity_id' => 3, 'name' => 'Feinting/Faking'],
            ['activity_id' => 4, 'name' => 'Standing Header'],
            ['activity_id' => 4, 'name' => 'Jumping Header'],
            ['activity_id' => 4, 'name' => 'Power'],
            ['activity_id' => 4, 'name' => 'Accuracy'],
            ['activity_id' => 5, 'name' => 'Laces (Instep) Drive'],
            ['activity_id' => 5, 'name' => 'Inside of Foot (Accuracy)'],
            ['activity_id' => 6, 'name' => 'Distance'],
            ['activity_id' => 6, 'name' => 'Accurancy'],
            ['activity_id' => 7, 'name' => 'Side leg splits'],
            ['activity_id' => 7, 'name' => 'Lengthwise leg spilts'],
            ['activity_id' => 7, 'name' => 'Single legged knee bend'],
            ['activity_id' => 7, 'name' => 'Leg raise and spine position'],
            ['activity_id' => 8, 'name' => 'Single'],
            ['activity_id' => 8, 'name' => 'Double'],
            ['activity_id' => 9, 'name' => 'Full planks'],
            ['activity_id' => 9, 'name' => 'Half planks'],
            ['activity_id' => 9, 'name' => 'Side planks'],
            ['activity_id' => 9, 'name' => 'Squats'],
            ['activity_id' => 9, 'name' => 'Pushups'],
            ['activity_id' => 10, 'name' => 'Maintains Ball Possession'],
            ['activity_id' => 10, 'name' => 'Finds Space for Self'],
            ['activity_id' => 10, 'name' => 'Takes on Defender'],
            ['activity_id' => 10, 'name' => 'Turns on Defender'],
            ['activity_id' => 11, 'name' => 'Approach to Ball'],
            ['activity_id' => 11, 'name' => 'Defensive Stance'],
            ['activity_id' => 11, 'name' => 'Marking Distance'],
            ['activity_id' => 11, 'name' => 'Goal-side Position'],
            ['activity_id' => 11, 'name' => 'Immediate Chase'],
            ['activity_id' => 11, 'name' => 'Delaying Attack'],
            ['activity_id' => 11, 'name' => 'Channeling Attack'],
            ['activity_id' => 11, 'name' => 'Tackling Attack']
        ];

        foreach ($skills as $skill)
            Skill::create($skill);
    }
}
