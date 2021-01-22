<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'driver_id',
        'booking_id',
        'type',
        'amount',
        'balance_before',
        'balance_after',
        'status',
    ];


    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
