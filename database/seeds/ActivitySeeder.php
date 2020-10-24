<?php

use App\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $activities = [
            ['name' => 'Passing Skills ( Both Feet )'],
            ['name' => 'Receving Skills ( Both Feet )'],
            ['name' => 'Dribling / Shielding Skills'],
            ['name' => 'Heading Skills'],
            ['name' => 'Shooting Skills'],
            ['name' => 'Throw-in Skills'],
            ['name' => 'Flexibility Skills'],
            ['name' => 'Juggling  Skills'],
            ['name' => 'Lunges and Planks'],
            ['name' => 'Individual Attack'],
            ['name' => 'Individual Defense']
        ];

        foreach ($activities as $activitie)
            Activity::create($activitie);
    }
}
