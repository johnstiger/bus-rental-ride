<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = [
        'name',
        'address',
        'start_date',
        'end_date',
        'bus_type',
        'number_of_passenger'
    ];
}
