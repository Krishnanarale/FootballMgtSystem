<?php

use App\Squad;
use Illuminate\Database\Seeder;

class SquadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $squads = [
            ['name' => 'Under - 8'],
            ['name' => 'Under - 10'],
            ['name' => 'Under - 12'],
            ['name' => 'Under - 14'],
            ['name' => 'Under - 17'],
            ['name' => 'Elite'],
        ]; // Array to be insert 

        foreach ($squads as $squad)
            Squad::create($squad); // Inserting one by one
    }
}
