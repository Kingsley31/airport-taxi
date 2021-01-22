<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'booking_type',
        'ref_number',
        'pickup_lat',
        'pickup_long',
        'pickup_address',
        'dropoff_lat',
        'dropoff_long',
        'dropoff_address',
        'kilometer',
        'amount',
        'discount',
        'status',
        'pickup_date',
        'pickup_time',
        'dropoff_date',
        'dropoff_time',
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function booking_assignment()
    {
        return $this->hasOne(BookingAssignment::class);
    }

    public function driver_transaction()
    {
        return $this->hasOne(DriverTransaction::class);
    }
}
