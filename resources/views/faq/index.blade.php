<style>
    .faq-section{
    padding:100px 20px;
}

.faq-section h1{
    text-align:center;
    margin-bottom:40px;
}

.faq-container{
    max-width:900px;
    margin:auto;
}

.faq-item{
    background:white;
    padding:20px;
    margin-bottom:20px;
    border-radius:12px;
    box-shadow:0 4px 10px rgba(0,0,0,.1);
}

.faq-item h3{
    margin-bottom:10px;
    color:#2563eb;
}

.faq-item p{
    line-height:1.6;
}
</style>

@extends('layouts.app')

@section('content')

<section class="faq-section">

    <h1>Frequently Asked Questions</h1>

    <div class="faq-container">

        <div class="faq-item">
            <h3>How can I book tickets?</h3>
            <p>
                Select an event, choose seats,
                complete payment, and receive your ticket.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can I cancel my booking?</h3>
            <p>
                Cancellation depends on the event organizer's policy.
            </p>
        </div>

        <div class="faq-item">
            <h3>How do I receive my ticket?</h3>
            <p>
                Your ticket is generated instantly after payment.
            </p>
        </div>

        <div class="faq-item">
            <h3>Can I show my ticket on mobile?</h3>
            <p>
                Yes, simply scan the QR ticket with your phone.
            </p>
        </div>

        <div class="faq-item">
            <h3>Is online payment secure?</h3>
            <p>
                Yes, all payments are processed securely.
            </p>
        </div>

    </div>

</section>

@endsection