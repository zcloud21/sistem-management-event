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
        Schema::table('guests', function (Blueprint $table) {
            $table->dropUnique('guests_email_unique');
            $table->dropColumn('email');
            $table->string('whatsapp_number',20)->nullable()->after('name');
            $table->unique(['event_id','whatsapp_number']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('guests', function (Blueprint $table) {
            $table->dropUnique('guests_event_id_whatsapp_number_unique');
            $table->dropColumn('whatsapp_number');
            $table->string('email')->unique()->after('name');
        });
    }
};
