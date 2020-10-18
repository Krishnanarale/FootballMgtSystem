<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = $this->createRoles();
        $this->giveAccessToRole($role);
    }

    public function createRoles()
    {
        return Role::create(['name' => 'Super Admin']);
    }

    public function giveAccessToRole(Role $role)
    {
        $role->syncPermissions(Permission::all());
    }
}
