<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'invoice_number',
        'issue_date',
        'due_date',
        'total_amount',
        'status',
        'voucher_id',
        'voucher_discount_amount', // Renamed from discount_amount
        'voucher_invalidation_reason',
        'voucher_invalidated_at',
        'original_total_before_voucher',
    ];

    protected $casts = [
        'voucher_invalidated_at' => 'datetime',
        'issue_date' => 'date', // Assuming these should also be cast
        'due_date' => 'date',   // Assuming these should also be cast
    ];

    /**
     * Relasi: Invoice ini milik Event mana
     */
    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    /**
     * Relasi: Invoice ini punya banyak catatan pembayaran
     */
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function voucher(): BelongsTo
    {
        return $this->belongsTo(Voucher::class);
    }

    // --- ACCESSOR (FUNGSI AJAIB) ---

    /**
     * Accessor: Menghitung otomatis total yang SUDAH DIBAYAR
     * Cara panggil: $invoice->paid_amount
     */
    protected function paidAmount(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->payments()->where('status', 'Verified')->sum('amount')
        );
    }

    protected function finalAmount(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->total_amount - $this->voucher_discount_amount
        );
    }

    /**
     * Accessor: Menghitung otomatis SISA TAGIHAN
     * Cara panggil: $invoice->balance_due
     */
    protected function balanceDue(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->final_amount - $this->paid_amount
        );
    }
}
