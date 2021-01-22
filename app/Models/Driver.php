<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Driver extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'full_name',
        'avatar_url',
        'email',
        'password',
        'balance',
        'last_location_lat',
        'last_location_long',
        'verification_code',
        'is_available',
        'is_verified',
        'address',
        'gender',
        'country_code',
        'phone',
        'bank_name',
        'bank_account_name',
        'bank_account_number',
        'bvn',
        'driving_lincense_url',
    ];

    public function booking_assignments()
    {
        return $this->hasMany(BookingAssignment::class);
    }

    public function driver_transactions()
    {
        return $this->hasMany(DriverTransaction::class);
    }

    public function vehicle()
    {
        return $this->hasOne(Vehicle::class);
    }
}
