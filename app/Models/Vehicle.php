<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_type',
        'name',
        'model',
        'color',
        'reg_number',
        'is_assigned_to_driver',
        'driver_id',
        'approval_status',
        'is_factory_fitted',
        'has_ac',

    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
