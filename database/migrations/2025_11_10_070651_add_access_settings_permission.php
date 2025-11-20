<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Check if the permission already exists before creating
        if (!Permission::where('name', 'access-settings')->where('guard_name', 'web')->exists()) {
            // Create the access-settings permission
            Permission::create(['name' => 'access-settings', 'guard_name' => 'web']);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Delete the access-settings permission
        Permission::where('name', 'access-settings')->delete();
    }
};
