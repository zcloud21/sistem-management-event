<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanySetting extends Model
{
    protected $fillable = [
        'company_name',
        'company_phone',
        'company_email',
        'company_address',
        'company_logo_path',
        'tax_number',
        'bank_account_name',
        'bank_account_number',
        'bank_name',
        'province_id',
        'city_id',
        'district_id',
        'village_id',
        'postal_code',
        'street_name',
        'building',
        'company_number',
        'address_details',
    ];

    protected $casts = [
        'company_name' => 'string',
        'company_phone' => 'string',
        'company_email' => 'string',
        'company_address' => 'string',
        'company_logo_path' => 'string',
        'tax_number' => 'string',
        'bank_account_name' => 'string',
        'bank_account_number' => 'string',
        'bank_name' => 'string',
        'province_id' => 'integer',
        'city_id' => 'integer',
        'district_id' => 'integer',
        'village_id' => 'integer',
        'postal_code' => 'string',
        'street_name' => 'string',
        'building' => 'string',
        'company_number' => 'string',
        'address_details' => 'string',
    ];

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }
    
    public function village(): BelongsTo
    {
        return $this->belongsTo(Village::class);
    }
}