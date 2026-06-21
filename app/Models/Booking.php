<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
   protected $fillable = [
    'booking_id',
    'name',
    'email',
    'phone',
    'event',
    'seats',
    'tickets',
    'amount'
]; 
}
