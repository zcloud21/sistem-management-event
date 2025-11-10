<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; // Added this import

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'type',
        'value',
        'expires_at',
        'max_uses',
        'status',
    ];

    /**
     * Relasi: Voucher ini bisa digunakan di banyak Invoice
     */
    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }
}
