<style>
.history-section{
    padding:100px 20px;
}

.history-section h1{
    text-align:center;
    margin-bottom:40px;
}

.history-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:20px;
}

.history-card{
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,.1);
}

.history-card h3{
    margin-bottom:15px;
}

.history-card p{
    margin:10px 0;
}

.view-btn{
    display:inline-block;
    margin-top:15px;
    background:#2563eb;
    color:white;
    padding:10px 20px;
    border-radius:8px;
    text-decoration:none;
}
</style>

@extends('layouts.app')

@section('content')

<section class="history-section">

    <h1>My Bookings</h1>

    <div class="history-container">

        @foreach($bookings as $booking)

        <div class="history-card">

            <h3>{{ $booking->event }}</h3>

            <p><strong>Booking ID:</strong>
                {{ $booking->booking_id }}
            </p>

            <p><strong>Seats:</strong>
                {{ $booking->seats }}
            </p>

            <p><strong>Tickets:</strong>
                {{ $booking->tickets }}
            </p>

            <p><strong>Amount:</strong>
                ₹{{ $booking->amount }}
            </p>

            <a href="/ticket/{{ $booking->booking_id }}"
               class="view-btn">
                View Ticket
            </a>

        </div>

        @endforeach

    </div>

</section>

@endsection