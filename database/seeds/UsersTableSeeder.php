<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = $this->createUser();
        $role = Role::find(1);
        $user->assignRole($role);
    }

    public function createUser()
    {
        return User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'is_admin' => 1,
                'role_id' => 1,
                'password' => bcrypt('admin@123'),
            ]
        );
    }
}
