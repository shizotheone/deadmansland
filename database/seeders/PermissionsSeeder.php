<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'member']);
        $role2 = Role::create(['name' => 'resident']);
        $role3 = Role::create(['name' => 'support']);
        $role4 = Role::create(['name' => 'admin']);
        $role5 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = \App\Models\User::factory()->create([
            'nickname' => 'RonnyRauser',
            'name' => 'Daniel',
            'lastname' => 'Kirchberg',
            'birthday' => '1990-08-30',
            'email' => 'dan.kirchberg@gmail.com',
        ]);
        $user->assignRole($role5);
    }
}
