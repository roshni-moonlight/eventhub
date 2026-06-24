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
$ticketUrl = 'https://eventhub-sx89.onrender.com/ticket/' . $booking->booking_id;
@endphp

<div class="ticket-container">

    <div class="ticket-card">

        <h1>🎟 Event Entry Ticket</h1>

        <p>Booking ID:{{ $booking->booking_id }}</p>

        <p>Name:{{ $booking->name }}</p>

        <p>Event: {{ $booking->event }}</p>

        <p>Seats: {{ $booking->seats }}</p>

        <p>Tickets:{{ $booking->tickets }}</p>

        <p>Total Paid: ₹{{ $booking->amount }}</p>
        
        <br>
          <p>QR URL: {{ $ticketUrl }}</p>
        <img
        src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data={{ urlencode($ticketUrl) }}"
        alt="QR Code">

    </div>

</div>

@endsection