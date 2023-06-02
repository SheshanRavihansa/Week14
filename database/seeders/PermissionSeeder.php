<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);
        $user = Role::create(['name' => 'user']);

        $permissionR = Permission::create(['name' => 'rooms']);
        $permissionV = Permission::create(['name' => 'visit']);
        
        $admin->givePermissionTo($permissionR, $permissionV);
        $user->givePermissionTo($permissionV);
    }
}
