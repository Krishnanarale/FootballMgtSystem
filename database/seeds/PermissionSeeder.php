<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions = [
            ['name' => 'create_role'],
            ['name' => 'view_roles'],
            ['name' => 'edit_role'],
            ['name' => 'delete_role'],
            ['name' => 'create_permission'],
            ['name' => 'view_permissions'],
            ['name' => 'edit_permission'],
            ['name' => 'delete_permission'],
            ['name' => 'view_access'],
            ['name' => 'edit_access'],
            ['name' => 'view_users'],
            ['name' => 'edit_user'],
            ['name' => 'delete_user'],
            ['name' => 'view_players'],
            ['name' => 'edit_player'],
            ['name' => 'delete_player'],
            ['name' => 'print_pdf'],
            ['name' => 'print_identity_card'],
            ['name' => 'give_ratings'],
            ['name' => 'create_trainer'],
            ['name' => 'view_trainers'],
            ['name' => 'edit_trainer'],
            ['name' => 'delete_trainer'],
            ['name' => 'create_contacted_us'],
            ['name' => 'view_contacted_us'],
            ['name' => 'edit_contacted_us'],
            ['name' => 'delete_contacted_us'],
            ['name' => 'create_page'],
            ['name' => 'view_pages'],
            ['name' => 'edit_page'],
            ['name' => 'delete_page'],
        ];

        foreach ($permissions as $permission)
            Permission::create($permission);
    }
}
