<?php

use App\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $positions = [
            ['name' => 'Goalkeeper'],
            ['name' => 'Right Fullback'],
            ['name' => 'Left Fullback'],
            ['name' => 'Center Back'],
            ['name' => 'Center Back (or Sweeper, if used)'],
            ['name' => 'Defending/Holding Midfielder'],
            ['name' => 'Right Midfielder/Winger'],
            ['name' => 'Central/Box-to-Box Midfielder'],
            ['name' => 'Striker'],
            ['name' => 'Attacking Midfielder/Playmaker'],
            ['name' => 'Left Midfielder/Wingers'],
        ]; // Array of positions to be insert 

        foreach ($positions as $position)
            Position::create($position); // Inserting one by one
    }
}
