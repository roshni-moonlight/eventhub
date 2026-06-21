<style>
.payment-section{
    padding:60px 8%;
    display:flex;
    justify-content:center;
    flex-direction:column;
    align-items:center;
    background:#f8fafc;
}

.payment-section h1{
    margin-bottom:30px;
    font-size:32px;
    color:#0f172a;
}

.payment-box{
    width:100%;
    max-width:500px;
    background:white;
    padding:30px;
    border-radius:15px;
    box-shadow:0 6px 20px rgba(0,0,0,0.1);
}

.payment-box h3{
    margin-bottom:15px;
    color:#0f172a;
}

.payment-box p{
    margin:10px 0;
    font-size:16px;
    color:#334155;
}

.payment-methods{
    margin:20px 0;
    display:flex;
    flex-direction:column;
    gap:10px;
}

.payment-methods label{
    background:#f1f5f9;
    padding:10px;
    border-radius:8px;
    cursor:pointer;
}

.pay-btn{
    display:block;
    text-align:center;
    background:#0f172a;
    color:white;
    padding:14px;
    border-radius:10px;
    text-decoration:none;
    font-size:18px;
    margin-top:20px;
    transition:0.3s;
}

.pay-btn:hover{
    background:#38bdf8;
}
</style>

@extends('layouts.app')

@section('content')

@php
    $seats = request('seats');
    $count = request('count') ?? 0;
    $price = 500;
    $total = $count * $price;
@endphp

<section class="payment-section">

    <h1>Payment Checkout</h1>

    <div class="payment-box">

        <h3>Order Summary</h3>

        <p><strong>Seats:</strong> {{ $seats }}</p>
        <p><strong>Tickets:</strong> {{ $count }}</p>
        <p><strong>Total:</strong> ₹{{ $total }}</p>

<br><br>

<form action="/payments/upi" method="GET">

    <input type="hidden" name="name" value="{{ request('name') }}">
    <input type="hidden" name="email" value="{{ request('email') }}">
    <input type="hidden" name="phone" value="{{ request('phone') }}">
    <input type="hidden" name="event" value="{{ request('event') }}">
    <input type="hidden" name="seats" value="{{ $seats }}">
    <input type="hidden" name="count" value="{{ $count }}">

    <button type="submit" class="pay-btn">
        Pay ₹{{ $total }}
    </button>

</form>
    </div>

</section>

@endsection