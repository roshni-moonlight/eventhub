<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      /* Featured Events */

.featured-events{
    padding:80px 8%;
}

.featured-events h2{
    text-align:center;
    font-size:40px;
    margin-bottom:50px;
}

.event-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:30px;
}

.event-card{
    background:white;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 4px 12px rgba(0,0,0,0.1);
}

.event-card img{
    width:100%;
    height:220px;
    object-fit:cover;
}

.event-card h3{
    padding:15px;
}

.event-card p{
    padding:0 15px 10px;
}

.event-card a{
    display:inline-block;
    margin:15px;
    text-decoration:none;
    background:#0f172a;
    color:white;
    padding:10px 20px;
    border-radius:6px;
}
    </style>
</head>
<body>
    @extends('layouts.app')

@section('content')

<section class="featured-events">

    <h2>Featured Events</h2>

    <div class="event-container">

        <div class="event-card">
            <img src="https://images.unsplash.com/photo-1501386761578-eac5c94b800a" alt="Concert">

            <h3>Music Concert 2026</h3>

            <p>📍 Chennai</p>

            <p>📅 25 July 2026</p>

            <a href="/events/show?event=music">View Details</a>
        </div>

        <div class="event-card">
            <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819" alt="Festival">

            <h3>Summer Festival</h3>

            <p>📍 Coimbatore</p>

            <p>📅 10 August 2026</p>

            <a href="/events/show?event=festival">View Details</a>
        </div>

        <div class="event-card">
            <img src="https://images.unsplash.com/photo-1540039155733-5bb30b53aa14" alt="Sports">

            <h3>Cricket League Final</h3>

            <p>📍 Madurai</p>

            <p>📅 18 August 2026</p>

            <a href="/events/show?event=cricket">View Details</a>
        </div>

    </div>

</section>

@endsection
</body>
</html>