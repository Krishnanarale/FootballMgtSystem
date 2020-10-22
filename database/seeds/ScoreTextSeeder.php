<?php

use App\ScoreText;
use Illuminate\Database\Seeder;

class ScoreTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $scoreTexts = [
            ['name' => 'No Skills'],
            ['name' => 'Below Average'],
            ['name' => 'Average'],
            ['name' => 'Good'],
            ['name' => 'Very Proficient']
        ];

        foreach ($scoreTexts as $scoreText)
            ScoreText::create($scoreText);
    }
}
