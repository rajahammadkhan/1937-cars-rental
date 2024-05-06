<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'DashBoard']);
        // user management permissions
        $userManagementMenu = Permission::create(['name' => 'Users management']);

        $usersMenu = Permission::create(['name' => 'Users', 'parent_id' => $userManagementMenu->id]);
        Permission::create(['name' => 'User add', 'parent_id' => $usersMenu->id]);
        Permission::create(['name' => 'User view', 'parent_id' => $usersMenu->id]);
        Permission::create(['name' => 'User delete', 'parent_id' => $usersMenu->id]);
        Permission::create(['name' => 'User edit', 'parent_id' => $usersMenu->id]);
        Permission::create(['name' => 'User status', 'parent_id' => $usersMenu->id]);

        // roles order permission
        $rolesMenu = Permission::create(['name' => 'Roles', 'parent_id' => $userManagementMenu->id]);
        Permission::create(['name' => 'Roles add', 'parent_id' => $rolesMenu->id]);
        Permission::create(['name' => 'Roles edit', 'parent_id' => $rolesMenu->id]);
        Permission::create(['name' => 'Roles delete', 'parent_id' => $rolesMenu->id]);
        Permission::create(['name' => 'Roles status', 'parent_id' => $rolesMenu->id]);


        $role3 = Role::create(['name' => 'super-admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider
        $role3->givePermissionTo(Permission::all());

        $user = \App\Models\User::factory()->create([
            'name' => 'Codusk Technologies',
            'user_type' => 0,
            'email' => 'zubair@codusk.net',
            'password' => Hash::make('123456')
        ]);
        $user->assignRole($role3);
    }
}
