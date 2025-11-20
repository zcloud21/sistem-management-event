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
        Schema::table('users', function (Blueprint $table) {
            // Add the owner_id column first without constraint
            $table->unsignedBigInteger('owner_id')->nullable()->after('id');
            
            // Then add the foreign key constraint with explicit naming
            $table->foreign('owner_id', 'users_owner_id_foreign')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_owner_id_foreign');
            $table->dropColumn('owner_id');
        });
    }
};
