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
        // Add indexes to location tables to improve performance
        Schema::table('provinces', function (Blueprint $table) {
            $table->index(['name'], 'provinces_name_index');
        });
        
        Schema::table('cities', function (Blueprint $table) {
            $table->index(['province_id'], 'cities_province_id_index');
            $table->index(['name'], 'cities_name_index');
        });
        
        Schema::table('districts', function (Blueprint $table) {
            $table->index(['city_id'], 'districts_city_id_index');
            $table->index(['name'], 'districts_name_index');
        });
        
        Schema::table('villages', function (Blueprint $table) {
            $table->index(['district_id'], 'villages_district_id_index');
            $table->index(['name'], 'villages_name_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('provinces', function (Blueprint $table) {
            $table->dropIndex(['provinces_name_index']);
        });
        
        Schema::table('cities', function (Blueprint $table) {
            $table->dropIndex(['cities_province_id_index']);
            $table->dropIndex(['cities_name_index']);
        });
        
        Schema::table('districts', function (Blueprint $table) {
            $table->dropIndex(['districts_city_id_index']);
            $table->dropIndex(['districts_name_index']);
        });
        
        Schema::table('villages', function (Blueprint $table) {
            $table->dropIndex(['villages_district_id_index']);
            $table->dropIndex(['villages_name_index']);
        });
    }
};
