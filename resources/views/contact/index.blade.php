<style>
   .contact-section{
    padding:100px 20px;
}

.contact-section h1{
    text-align:center;
    margin-bottom:40px;
}

.contact-container{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:40px;
}

.contact-info{
    background:white;
    padding:30px;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,.1);
}

.contact-info p{
    margin:15px 0;
}

.contact-form{
    display:flex;
    flex-direction:column;
    gap:15px;
}

.contact-form input,
.contact-form textarea{
    padding:12px;
    border:1px solid #ddd;
    border-radius:8px;
}

.contact-form button{
    background:#2563eb;
    color:white;
    border:none;
    padding:12px;
    border-radius:8px;
    cursor:pointer;
}

.contact-form button:hover{
    background:#1d4ed8;
} 
</style>

@extends('layouts.app')

@section('content')

<section class="contact-section">

    <h1>Contact Us</h1>

    <div class="contact-container">

        <div class="contact-info">

            <h2>EventHub</h2>

            <p>📍 Chennai, Tamil Nadu</p>

            <p>📞 +91 93461 45224</p>

            <p>📧 support@eventhub.com</p>

        </div>

        <form class="contact-form">

            <input type="text"
                   placeholder="Your Name">

            <input type="email"
                   placeholder="Your Email">

            <textarea
                rows="5"
                placeholder="Your Message">
            </textarea>

            <button type="submit">
                Send Message
            </button>

        </form>

    </div>

</section>

@endsection