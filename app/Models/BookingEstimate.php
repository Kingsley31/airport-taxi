<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingEstimate extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_type_id',
        'is_factory_fitted',
        'has_ac',
        'price_per_kilo',
    ];
}
