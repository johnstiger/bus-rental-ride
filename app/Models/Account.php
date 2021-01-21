<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table = 'accounts';
    protected $fillable = [
        'firstname',
        'lastname',
        'address',
        'contact_number',
        'email_address',
        'payment',
        'password'
    ];
    protected $hidden = [
        'password'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
