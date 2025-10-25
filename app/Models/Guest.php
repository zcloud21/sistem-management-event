<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Str;


class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'name',
        'whatsapp_number',
        'status',
    ];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function ticket(): HasOne
    {
        return $this->hasOne(Ticket::class);
    }

    protected static function boot()
    {
        parent::boot();
        self::created(function ($guest) {
            $guest->ticket()->create([
                'ticket_code' => (string) Str::uuid()
            ]);
        });
    }
}
