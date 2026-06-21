<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .booking-section{
    padding:60px 8%;
    display:flex;
    flex-direction:column;
    align-items:center;
}

.booking-section h1{
    margin-bottom:30px;
}

.booking-form{
    width:100%;
    max-width:500px;
    background:white;
    padding:30px;
    border-radius:12px;
    box-shadow:0 4px 15px rgba(0,0,0,0.1);
}

.form-group{
    margin-bottom:20px;
    display:flex;
    flex-direction:column;
}

.form-group label{
    margin-bottom:8px;
    font-weight:bold;
}

.form-group input{
    padding:12px;
    border:1px solid #ccc;
    border-radius:8px;
}

.book-btn{
    text-decoration:none;
    margin-top:18px;
    padding:14px;
    background:#0f172a;
    color:white;
    border:none;
    border-radius:8px;
    font-size:16px;
    cursor:pointer;
    transition:0.3s;
}

.book-btn:hover{
    background:#38bdf8;
} 
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')

@php
    $event = request('event');
    $seats = request('seats');
    $count = request('count') ?? 0;
    $price = 500;
    $total = $count * $price;
@endphp

<section class="booking-section">

    <h1>Complete Your Booking</h1>

     <form class="booking-form" action="/payments/checkout" method="GET">

    <div class="form-group">
        <label>Full Name</label>
        <input type="text" name="name" placeholder="Enter your name" required>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="Enter your email" required>
    </div>

    <div class="form-group">
        <label>Phone Number</label>
        <input type="text" name="phone" placeholder="Enter your phone number" required>
    </div>

    <div class="form-group">
        <label>Selected Event</label>
        <input type="text" name="event" value="{{ $event }}" readonly>
    </div>

    <div class="form-group">
        <label>Selected Seats</label>
        <input type="text" name="seats" value="{{ $seats }}" readonly>
    </div>

    <input type="hidden" name="count" value="{{ $count }}">

    <div class="form-group">
        <label>Number of Tickets</label>
        <input type="text" value="{{ $count }}" readonly>
    </div>

    <div class="form-group">
        <label>Total Amount</label>
        <input type="text" value="₹{{ $total }}" readonly>
    </div>



    <button type="submit" class="book-btn">
        Proceed to Payment
    </button> 
</form>

</section>

@endsection
</body>
</html>