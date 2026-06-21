<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class bookingcontroller extends Controller
{

   public function store(Request $request)
{
    $bookingId = "BK" . rand(10000,99999);

    $count = $request->count;
    $price = 500;

    Booking::create([
        'booking_id' => $bookingId,
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'event' => $request->event,
        'seats' => $request->seats,
        'tickets' => $count,
        'amount' => $count * $price
    ]);

    return redirect()->route('ticket.show', $bookingId);
} 

}
