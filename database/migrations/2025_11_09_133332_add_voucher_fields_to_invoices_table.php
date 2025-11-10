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
        Schema::table('invoices', function (Blueprint $table) {
            // $table->foreignId('voucher_id')->nullable()->constrained('vouchers')->onDelete('set null');
            $table->decimal('voucher_discount_amount', 10, 2)->nullable()->default(0);
            $table->string('voucher_invalidation_reason')->nullable();
            $table->timestamp('voucher_invalidated_at')->nullable();
            $table->decimal('original_total_before_voucher', 10, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropForeign(['voucher_id']);
            $table->dropColumn(['voucher_id', 'voucher_discount_amount', 'voucher_invalidation_reason', 'voucher_invalidated_at', 'original_total_before_voucher']);
        });
    }
};
