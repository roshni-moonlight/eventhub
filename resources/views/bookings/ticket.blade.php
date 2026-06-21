<style>
.ticket-container{
    display:flex;
    justify-content:center;
    align-items:center;
    min-height:100vh;
    background:#f5f5f5;
}

.ticket-card{
    width:350px;
    background:white;
    padding:30px;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

.ticket-card h1{
    text-align:center;
    margin-bottom:20px;
}

.ticket-card p{
    font-size:18px;
    margin:10px 0;
}
</style>

@extends('layouts.app')

@section('content')

@php
$ticketUrl = "http://192.168.1.18:8000/qr-ticket/" . $booking->booking_id;
@endphp

<div class="ticket-container">

    <div class="ticket-card">

        <h1>🎟 Event Entry Ticket</h1>

        <p><strong>Booking ID:</strong> {{ $booking->booking_id }}</p>

        <p><strong>Name:</strong> {{ $booking->name }}</p>

        <p><strong>Event:</strong> {{ $booking->event }}</p>

        <p><strong>Seats:</strong> {{ $booking->seats }}</p>

        <p><strong>Tickets:</strong> {{ $booking->tickets }}</p>

        <p><strong>Total Paid:</strong> ₹{{ $booking->amount }}</p>

        <br>

        <img
        src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data={{ urlencode($ticketUrl) }}"
        alt="QR Code">

    </div>

</div>

@endsection