
<style>
    .success-section{
    padding:60px 8%;
    display:flex;
    justify-content:center;
    align-items:center;
    background:#f0fdf4;
}

.success-box{
    width:100%;
    max-width:500px;
    background:white;
    padding:40px;
    border-radius:15px;
    text-align:center;
    box-shadow:0 6px 25px rgba(0,0,0,0.1);
}

.success-icon{
    font-size:60px;
    margin-bottom:10px;
}

.success-box h1{
    color:#16a34a;
    margin-bottom:10px;
    font-size:28px;
}

.success-box p{
    color:#475569;
    margin-bottom:10px;
}

.ticket-info{
    text-align:left;
    margin:20px 0;
    background:#f8fafc;
    padding:15px;
    border-radius:10px;
}

.ticket-info p{
    margin:8px 0;
    font-size:15px;
    color:#334155;
}

.home-btn{
    display:inline-block;
    background:#0f172a;
    color:white;
    padding:12px 25px;
    border-radius:10px;
    text-decoration:none;
    margin-top:15px;
    transition:0.3s;
}

.home-btn:hover{
    background:#38bdf8;
}
</style>


@extends('layouts.app')

@section('content')



<section class="success-section">

    <div class="success-box">

        <div class="success-icon">🎉</div>

        <h1>Booking Successful!</h1>

        <div class="ticket-info">

            <p><strong>Booking ID:</strong> {{ $bookingId }}</p>
            <p><strong>Seats:</strong> {{ $seats ?? 'N/A' }}</p>
            <p><strong>Tickets:</strong> {{ $count }}</p>
            <p><strong>Total Paid:</strong> ₹{{ $total }}</p>

        </div>

         <a href="/ticket/{{ $bookingId }}" class="home-btn">
            View Ticket
        </a>
    </div>

</section>

@endsection