<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PositionSeeder::class);
        $this->call(SquadSeeder::class);
        $this->call(ScoreTextSeeder::class);
        $this->call(ActivitySeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(PageSeeder::class);
    }
}
