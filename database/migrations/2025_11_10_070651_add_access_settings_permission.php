<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create the access-settings permission
        \Spatie\Permission\Models\Permission::create(['name' => 'access-settings', 'guard_name' => 'web']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Delete the access-settings permission
        \Spatie\Permission\Models\Permission::where('name', 'access-settings')->delete();
    }
};
