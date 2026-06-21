<style>
.dashboard{
    max-width:1200px;
    margin:50px auto;
    padding:20px;
}

.dashboard h1{
    text-align:center;
    margin-bottom:30px;
}

.booking-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:20px;
}

.booking-card{
    background:white;
    padding:20px;
    border-radius:12px;
    box-shadow:0 5px 15px rgba(0,0,0,.1);
}
</style>


@extends('layouts.app')

@section('content')

<section class="dashboard">

    <h1>All User Bookings</h1>

    <div class="booking-grid">

        @foreach($bookings as $booking)

            <div class="booking-card">

                <h3>{{ $booking->event }}</h3>

                <p>
                    <strong>Name:</strong>
                    {{ $booking->name }}
                </p>

                <p>
                    <strong>Booking ID:</strong>
                    {{ $booking->booking_id }}
                </p>

                <p>
                    <strong>Seats:</strong>
                    {{ $booking->seats }}
                </p>

                <p>
                    <strong>Tickets:</strong>
                    {{ $booking->tickets }}
                </p>

                <p>
                    <strong>Amount:</strong>
                    ₹{{ $booking->amount }}
                </p>

            </div>

        @endforeach

    </div>

</section>

@endsection