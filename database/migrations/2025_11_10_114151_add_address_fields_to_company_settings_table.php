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
        Schema::table('company_settings', function (Blueprint $table) {
            $table->unsignedBigInteger('province_id')->nullable()->after('company_address');
            $table->unsignedBigInteger('city_id')->nullable()->after('province_id');
            $table->unsignedBigInteger('district_id')->nullable()->after('city_id');
            $table->string('postal_code')->nullable()->after('district_id');
            $table->string('street_name')->nullable()->after('postal_code');
            $table->string('building')->nullable()->after('street_name');
            $table->string('company_number')->nullable()->after('building');
            $table->text('address_details')->nullable()->after('company_number');
            
            // Foreign key constraints
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('set null');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('set null');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('company_settings', function (Blueprint $table) {
            $table->dropForeign(['province_id']);
            $table->dropForeign(['city_id']);
            $table->dropForeign(['district_id']);
            
            $table->dropColumn([
                'province_id',
                'city_id', 
                'district_id',
                'postal_code',
                'street_name',
                'building',
                'company_number',
                'address_details'
            ]);
        });
    }
};
