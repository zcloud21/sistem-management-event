<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get the roles and permissions
        $superUserRole = Role::where('name', 'Super User')->first();
        $ownerRole = Role::where('name', 'Owner')->first();
        $accessSettingsPermission = Permission::where('name', 'access-settings')->first();
        
        // Assign the access-settings permission to Super User and Owner roles
        if ($superUserRole && $accessSettingsPermission) {
            $superUserRole->givePermissionTo($accessSettingsPermission);
        }
        
        if ($ownerRole && $accessSettingsPermission) {
            $ownerRole->givePermissionTo($accessSettingsPermission);
        }
    }
}
