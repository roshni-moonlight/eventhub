<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .event-details{
    display:flex;
    gap:50px;
    padding:60px 8%;
    align-items:center;
    flex-wrap:wrap;
}

.event-image{
    flex:1;
}

.event-image img{
    width:100%;
    border-radius:15px;
}

.event-info{
    flex:1;
}

.event-info h1{
    font-size:42px;
    margin-bottom:20px;
}

.description{
    margin-bottom:20px;
    line-height:1.8;
}

.event-info p{
    margin-bottom:12px;
}

.book-btn{
    display:inline-block;
    margin-top:20px;
    padding:14px 30px;
    background:#0f172a;
    color:white;
    text-decoration:none;
    border-radius:8px;
}
    </style>
</head>
<body>
    @extends('layouts.app')

@section('content')

@php
    $event = request('event');
@endphp

<section class="event-details">

    @if($event == 'music')

        <div class="event-image">
            <img src="https://images.unsplash.com/photo-1501386761578-eac5c94b800a" alt="">
        </div>

        <div class="event-info">
            <h1>Music Concert 2026</h1>

            <p class="description">
                Experience an unforgettable night filled with live music,
                special performances, and entertainment.
            </p>

            <p><strong>📍 Venue:</strong> Chennai Trade Centre</p>
            <p><strong>📅 Date:</strong> 25 July 2026</p>
            <p><strong>⏰ Time:</strong> 6:00 PM</p>
            <p><strong>💰 Price:</strong> ₹500</p>

            <a href="/events/seats?event=Music Concert 2026" class="book-btn">
    Select Seats
</a>
        </div>

    @elseif($event == 'festival')

        <div class="event-image">
            <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819" alt="">
        </div>

        <div class="event-info">
            <h1>Summer Festival 2026</h1>

            <p class="description">
                Enjoy food stalls, cultural programs, games,
                music performances and fun activities.
            </p>

            <p><strong>📍 Venue:</strong> Coimbatore Grounds</p>
            <p><strong>📅 Date:</strong> 10 August 2026</p>
            <p><strong>⏰ Time:</strong> 10:00 AM</p>
            <p><strong>💰 Price:</strong> ₹500</p>

            <a href="/events/seats?event=Summer Festival 2026" class="book-btn">
    Select Seats
</a>
        </div>

    @elseif($event == 'cricket')

        <div class="event-image">
            <img src="https://images.unsplash.com/photo-1540039155733-5bb30b53aa14" alt="">
        </div>

        <div class="event-info">
            <h1>Cricket League Final</h1>

            <p class="description">
                Watch the top teams battle for the championship
                in an exciting final match.
            </p>

            <p><strong>📍 Venue:</strong> Madurai Stadium</p>
            <p><strong>📅 Date:</strong> 18 August 2026</p>
            <p><strong>⏰ Time:</strong> 7:00 PM</p>
            <p><strong>💰 Price:</strong> ₹500</p>

            <a href="/events/seats?event=Cricket League Final" class="book-btn">
    Select Seats
</a>
        </div>

    @endif

</section>

@endsection
</body>
</html>