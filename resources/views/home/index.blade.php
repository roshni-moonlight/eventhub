<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Hero Section */

.hero{
    height:90vh;
    background:linear-gradient(
        rgba(0,0,0,0.6),
        rgba(0,0,0,0.6)
    ),
    url('https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f');

    background-size:cover;
    background-position:center;

    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
}

.hero-content{
    color:white;
}

.hero-content h1{
    font-size:60px;
    margin-bottom:20px;
}

.hero-content p{
    font-size:22px;
    margin-bottom:30px;
}

.hero-btn{
    text-decoration:none;
    background:#38bdf8;
    color:white;
    padding:15px 30px;
    border-radius:8px;
    font-size:18px;
}

/* qr  */
.website-qr{
    position:fixed;
    width:118px;
    bottom:20px;
    right:20px;
    background:white;
    padding:8px;
    border-radius:12px;
    box-shadow:0 4px 10px rgba(0,0,0,0.2);
    z-index:999;
}

.website-qr img{
    width:100px;
    height:100px;
}
    </style>
</head>
<body>
    @extends('layouts.app')

@section('content')

<section class="hero">

    <div class="hero-content">

        <h1>Book Tickets For Amazing Events</h1>

        <p>
            Discover concerts, festivals, sports events,
            conferences and entertainment shows near you.
        </p>

        <a href="/events" class="hero-btn">
            Explore Events
        </a>

    </div>

</section>
<!-- qr access phone  -->
@php
    $websiteUrl = "http://192.168.1.18:8000";
@endphp

<div class="website-qr">
    <img src="https://api.qrserver.com/v1/create-qr-code/?size=120x120&data={{ urlencode($websiteUrl) }}"
         alt="Website QR">
</div>
<!-- .  -->
@endsection
</body>
</html>