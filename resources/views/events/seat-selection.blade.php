<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Seat Selection */

.seat-section{
    padding:60px 8%;
    text-align:center;
}

.seat-section h1{
    margin-bottom:20px;
}

.screen{
    background:#0f172a;
    color:white;
    padding:15px;
    border-radius:8px;
    width:300px;
    margin:0 auto 40px;
}

.seat-container{
    display:grid;
    grid-template-columns:repeat(5,80px);
    gap:15px;
    justify-content:center;
    margin-bottom:50px;
}

.seat{
    width:80px;
    height:80px;
    border:none;
    background:#38bdf8;
    color:white;
    font-size:18px;
    border-radius:10px;
    cursor:pointer;
    transition:0.3s;
}

.seat:hover{
    background:#0f172a;
}

.booking-summary{
    max-width:400px;
    margin:auto;
    background:white;
    padding:30px;
    border-radius:15px;
    box-shadow:0 4px 15px rgba(0,0,0,0.1);
}

.booking-summary h3{
    margin-bottom:20px;
}

.booking-summary p{
    margin-bottom:12px;
}

.continue-btn{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    background:#0f172a;
    color:white;
    padding:12px 25px;
    border-radius:8px;
}
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')

<section class="seat-section">

    <h1>Select Your Seats</h1>

    <p class="screen">🎬 STAGE / SCREEN</p>

    <div class="seat-container">

        <button class="seat">A1</button>
        <button class="seat">A2</button>
        <button class="seat">A3</button>
        <button class="seat">A4</button>
        <button class="seat">A5</button>

        <button class="seat">B1</button>
        <button class="seat">B2</button>
        <button class="seat">B3</button>
        <button class="seat">B4</button>
        <button class="seat">B5</button>

        <button class="seat">C1</button>
        <button class="seat">C2</button>
        <button class="seat">C3</button>
        <button class="seat">C4</button>
        <button class="seat">C5</button>

    </div>

    <div class="booking-summary">

        <h3>Booking Summary</h3>

        <p>
            Selected Seat :
            <span id="selectedseat">None</span>
        </p>

        <p>
            Ticket Price : ₹500
        </p>

        <p>
            Total Amount : ₹<span id="totalAmount">0</span>
        </p>

        <a id="continueBtn"
           href="/bookings/create?event={{ request('event') }}&seats={{ request('seat') }}&count=1"
           class="continue-btn">
           Continue Booking
        </a>

    </div>

</section>

{{-- ✅ SINGLE CLEAN SCRIPT --}}
<script>
    const seats = document.querySelectorAll('.seat');

    const selectedseat = document.getElementById('selectedseat');
    const totalAmount = document.getElementById('totalAmount');
    const continueBtn = document.getElementById('continueBtn');

    let selectedseats = [];
    let pricePerSeat = 500;

    // seat click logic
    seats.forEach(seat => {
        seat.addEventListener('click', function () {

            let seatValue = this.innerText;

            if (selectedseats.includes(seatValue)) {
                selectedseats = selectedseats.filter(s => s !== seatValue);
                this.style.background = "#38bdf8";
            } else {
                selectedseats.push(seatValue);
                this.style.background = "#0f172a";
            }

            // update UI
            selectedseat.innerText =
                selectedseats.length ? selectedseats.join(', ') : "None";

            totalAmount.innerText = selectedseats.length * pricePerSeat;
        });
    });

    // continue booking
    continueBtn.addEventListener('click', function (e) {
        e.preventDefault();

        let seatsParam = selectedseats.join(',');

        if (selectedseats.length === 0) {
            alert("Please select seats first!");
            return;
        }

        let eventName = "{{ request('event') }}";

        window.location.href =
            "/bookings/create?event=" +
            encodeURIComponent(eventName) +
            "&seats=" +
            encodeURIComponent(seatsParam) +
            "&count=" +
            selectedseats.length;
    });
</script>

@endsection
</body>
</html>