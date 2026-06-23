@extends('layouts.app')

@section('content')

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
</style>

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

@endsection