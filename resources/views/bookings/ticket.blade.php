<style>

.ticket-container{
    display:flex;
    justify-content:center;
    margin:50px 0;
}

.ticket{
    width:850px;
    height:350px;
    background:#0F172A;
    display:flex;
    border-radius:20px;
    overflow:hidden;
    box-shadow:0 10px 20px rgba(213, 214, 224, 0.2);
}

.ticket-left{
    width:180px;
    border-right:4px dotted #fff;
    display:flex;
    justify-content:center;
    align-items:center;
}

.ticket-id{
    color:#ffd1e5;
    font-size:35px;
    font-weight:bold;
    transform:rotate(-90deg);
}

.ticket-right{
    flex:1;
    padding:40px;
    text-align:center;
    color:white;
}

.ticket-right h1{
    font-size:60px;
    margin-bottom:20px;
}

.ticket-right h2{
    font-size:35px;
    margin-bottom:40px;
}

.info{
    font-size:24px;
    line-height:2;
}

</style>

@extends('layouts.app')

@section('content')

<div class="ticket-container">

    <div class="ticket">

        <div class="ticket-left">
            <div class="ticket-id">
                {{ $booking->booking_id }}
            </div>
        </div>

        <div class="ticket-right">

            <h1>EVENTHUB</h1>

            <h2>{{ $booking->event }}</h2>

            <div class="info">
                <p><strong>Name:</strong> {{ $booking->name }}</p>
                <p><strong>Booking ID:</strong> {{ $booking->booking_id }}</p>
            </div>

        </div>

    </div>

</div>

@endsection