<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Permissions
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'edit posts']);

        // Roles
        $adminRole = Role::create(['name' => 'super admin', 'guard_name' => 'admin']);
        $adminRole->givePermissionTo(Permission::all());
    }
}
