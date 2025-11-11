<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Village extends Model
{
    protected $fillable = [
        'name',
        'code',
        'district_id',
        'postal_code',
    ];

    protected $casts = [
        'name' => 'string',
        'code' => 'string',
        'district_id' => 'integer',
        'postal_code' => 'string',
    ];

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }

    public function city()
    {
        return $this->district->city;
    }

    public function province()
    {
        return $this->district->province;
    }
}
