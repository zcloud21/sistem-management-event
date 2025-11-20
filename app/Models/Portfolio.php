<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'client',
        'project_date',
        'category',
        'location',
    ];

    protected $casts = [
        'project_date' => 'date',
    ];
}