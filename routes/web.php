<?php

use Illuminate\Support\Facades\Route;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('layouts.app');
});

Route::view('/','home.index');
Route::view('/events','events.index');

Route::get('/events/show', function () {
    return view('events.show');
});

Route::get('/events/seats', function (Request $request) {

    $event = $request->event;
    $seat = $request->seat ?? null;

    return view('events.seat-selection', compact('event', 'seat'));
});

Route::get('/bookings/create', function (Request $request) {

    return view('bookings.create', [
        'event' => $request->event,
        'seats' => $request->seats,
        'count' => $request->count
    ]);

});

// upi 
Route::get('/payments/upi', function () {
    return view('payments.upi');
});

// payment process 
Route::post('/payments/process', function (Request $request) {

    return view('payments.loading', [
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'event' => $request->event,
        'seats' => $request->seats,
        'count' => $request->count
    ]);

});

// payment checkout  
Route::get('/payments/checkout', function () {
    return view('payments.checkout');
});

// payment success 
Route::get('/payments/success', function (Request $request) {

    $bookingId = "BK" . rand(10000,99999);

    $count = $request->count;
    $seats = $request->seats;
    $total = $count * 500;

    $booking = new Booking();

    $booking->booking_id = $bookingId;
    $booking->name = $request->name;
    $booking->email = $request->email;
    $booking->phone = $request->phone;
    $booking->event = $request->event;
    $booking->seats = $seats;
    $booking->tickets = $count;
    $booking->amount = $total;

    $booking->save();

    return view('payments.success', [
        'bookingId' => $bookingId,
        'seats' => $seats,
        'count' => $count,
        'total' => $total
    ]);
});

// ticket 
Route::get('/qr-ticket/{bookingId}', function ($bookingId) {

    $booking = Booking::where('booking_id', $bookingId)
                      ->firstOrFail();

    return view('bookings.qr-ticket', compact('booking'));

})->name('qr.ticket');

// QR 
Route::get('/ticket/{bookingId}', function ($bookingId) {

    $booking = Booking::where('booking_id', $bookingId)->first();

    if (!$booking) {
        abort(404, 'Ticket not found');
    }

    return view('bookings.ticket', compact('booking'));

})->name('ticket.show');

// booking 
Route::get('/bookings/history', function () {

    $bookings = Booking::latest()->get();

    return view('bookings.history', compact('bookings'));

});

// ratings 
Route::view('/reviews', 'reviews.index');

// contact 
Route::view('/contact', 'contact.index');

// FAQ 
Route::view('/faq', 'faq.index');

// login 
Route::view('/login', 'auth.login');

Route::post('/admin/login', function(Request $request){

    $name = $request->name;
    $password = $request->password;

    if($name == 'roshini' && $password == '12345'){
        Session::put('admin', true);
        return redirect('/admin/dashboard');
    }

    return back()->with('error','Invalid Login');

});

// admin dashboard 
Route::get('/admin/dashboard', function(){

    if(!session('admin')){
        return redirect('/login');
    }

    $bookings = Booking::latest()->get();

    return view('admin.dashboard', compact('bookings'));

});



