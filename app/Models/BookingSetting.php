<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'disabled_dates',
        'time_interval',
    ];

    protected $casts = [
        'disabled_dates' => 'array',
    ];
}
