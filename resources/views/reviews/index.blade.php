<style>
.review-section{
    padding:100px 20px;
    text-align:center;
}

.review-section h1{
    margin-bottom:40px;
}

.review-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:20px;
}

.review-card{
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,.1);
}

.review-card h3{
    margin-bottom:15px;
}

.review-card p{
    line-height:1.6;
}

.review-card h4{
    margin-top:15px;
    color:#2563eb;
}
</style>

@extends('layouts.app')

@section('content')

<section class="review-section">

    <h1>Event Reviews</h1>

    <div class="review-container">

        <div class="review-card">
            <h3>⭐⭐⭐⭐⭐</h3>
            <p>
                Amazing concert experience!
                Great sound and lighting.
            </p>
            <h4>- Radhi</h4>
        </div>

        <div class="review-card">
            <h3>⭐⭐⭐⭐</h3>
            <p>
                Well organized event.
                Enjoyed every moment.
            </p>
            <h4>- Priya</h4>
        </div>

        <div class="review-card">
            <h3>⭐⭐⭐⭐⭐</h3>
            <p>
                Best music event I've attended.
            </p>
            <h4>- Arun</h4>
        </div>
         

        <div class="review-card">
    <h3>⭐⭐⭐⭐⭐</h3>
    <p>
        The booking process was smooth and easy.
        The QR ticket feature worked perfectly.
    </p>
    <h4>- Kavya</h4>
</div>

<div class="review-card">
    <h3>⭐⭐⭐⭐</h3>
    <p>
        Loved the event atmosphere.
        The seating arrangement was excellent.
    </p>
    <h4>- Rahul</h4>
</div>

<div class="review-card">
    <h3>⭐⭐⭐⭐⭐</h3>
    <p>
        Fantastic experience! The concert was
        energetic and well managed.
    </p>
    <h4>- Meena</h4>
</div>

<div class="review-card">
    <h3>⭐⭐⭐⭐⭐</h3>
    <p>
        EventHub made ticket booking so simple.
        Highly recommended!
    </p>
    <h4>- Vignesh</h4>
</div>

<div class="review-card">
    <h3>⭐⭐⭐⭐</h3>
    <p>
        Good customer support and quick booking
        confirmation.
    </p>
    <h4>- Anjali</h4>
</div>

<div class="review-card">
    <h3>⭐⭐⭐⭐⭐</h3>
    <p>
        The event was unforgettable.
        Looking forward to the next one!
    </p>
    <h4>- Sanjay</h4>
</div>

<div class="review-card">
    <h3>⭐⭐⭐⭐⭐</h3>
    <p>
        Easy seat selection and secure payment.
        Great platform for events.
    </p>
    <h4>- Deepika</h4>
</div>

<div class="review-card">
    <h3>⭐⭐⭐⭐</h3>
    <p>
        The live music performance was amazing.
        Worth every rupee.
    </p>
    <h4>- Harish</h4>
</div>

<div class="review-card">
    <h3>⭐⭐⭐⭐⭐</h3>
    <p>
        Clean interface, fast booking, and
        instant ticket generation.
    </p>
    <h4>- Nithya</h4>
</div>
    </div>

</section>

@endsection