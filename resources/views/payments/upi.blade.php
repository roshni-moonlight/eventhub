<style>
.payment-container{
    width:550px;
    margin:50px auto;
    padding:30px;
    background:#fff;
    border-radius:18px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.payment-container h2{
    text-align:center;
    margin-bottom:25px;
}

/* Payment Method Options */
.payment-container label{
    display:flex;
    align-items:center;
    gap:10px;
    margin-bottom:15px;
    font-size:17px;
    cursor:pointer;
}

/* Radio Buttons */
.payment-container input[type="radio"]{
    width:auto;
    margin:0;
}

/* Text Fields */
.payment-container input[type="text"],
.payment-container input[type="password"],
.payment-container select{
    width:100%;
    padding:12px 15px;
    margin-top:10px;
    margin-bottom:15px;
    border:1px solid #ddd;
    border-radius:10px;
    font-size:15px;
    box-sizing:border-box;
}

/* Buttons */
.payment-container button{
    width:100%;
    padding:14px;
    margin-top:10px;
    background:#0d6efd;
    color:white;
    border:none;
    border-radius:10px;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    transition:.3s;
}

.payment-container button:hover{
    background:#0b5ed7;
}

/* Fake Card */
.fake-card{
    width:100%;
    max-width:380px;
    height:200px;
    padding:25px;
    border-radius:18px;
    background:linear-gradient(135deg,#1e3c72,#2a5298);
    color:white;
    margin:20px auto;
    box-sizing:border-box;
}

.fake-card h3{
    margin-bottom:30px;
    font-size:24px;
}

.fake-card p{
    margin:8px 0;
    font-size:18px;
}

#upi-box,
#card-box,
#netbanking-box{
    margin-top:25px;
}

/* User Details */
#bank-details p,
#upi-box p{
    margin:8px 0;
    font-size:16px;
    font-weight:500;
}
</style>


@extends('layouts.app')

@section('content')

<div class="payment-container">

    <h2>Complete Payment</h2><br>

    <label>
        <input type="radio" name="payment_type" checked onclick="showPayment('upi')">
        UPI
    </label>
    <label>
        <input type="radio" name="payment_type" onclick="showPayment('netbanking')">
        Net Banking
    </label>

    <label>
        <input type="radio" name="payment_type" onclick="showPayment('card')">
        Card
    </label>

    

    <!-- UPI -->

    <div id="upi-box">

        <h3>UPI Payment</h3><br>

        <p>Name: {{ request('name') }}</p><br>

        <form action="/payments/process" method="POST">
            @csrf
            <!-- <label>UPI ID</label> -->
            <input type="text" name="upi_id" value="{{ request('name') }}" required>
            <input type="hidden" name="name" value="{{ request('name') }}">
            <input type="hidden" name="email" value="{{ request('email') }}">
            <input type="hidden" name="phone" value="{{ request('phone') }}">
            <input type="hidden" name="event" value="{{ request('event') }}">
            <input type="hidden" name="seats" value="{{ request('seats') }}">
            <input type="hidden" name="count" value="{{ request('count') }}">

            <input type="password" placeholder="UPI PIN" required>

            <button type="submit">Confirm Payment</button>
        </form>

    </div>

    <!-- CARD -->

    <div id="card-box" style="display:none;">

        <div class="fake-card">

            <h3>Debit Card</h3>

            <p>{{ request('name') }}</p>

            <p>**** **** **** 1234</p>

        </div>

        <form action="/payments/process" method="POST">
            @csrf

            <input type="hidden" name="name" value="{{ request('name') }}">
            <input type="hidden" name="email" value="{{ request('email') }}">
            <input type="hidden" name="phone" value="{{ request('phone') }}">
            <input type="hidden" name="event" value="{{ request('event') }}">
            <input type="hidden" name="seats" value="{{ request('seats') }}">
            <input type="hidden" name="count" value="{{ request('count') }}">

            <input type="text" maxlength="4" placeholder="Enter Your Pin" required>

            <button type="submit">Confirm Payment</button>

        </form>

    </div>

    <!-- NET BANKING -->

    <div id="netbanking-box" style="display:none;">

        <h3>Select Bank</h3>

        <select onchange="showBankDetails(this.value)">
            <option value="">Choose Bank</option>
            <option>SBI</option>
            <option>HDFC</option>
            <option>ICICI</option>
        </select>

        <div id="bank-details" style="display:none;">

            <p>Name: {{ request('name') }}</p>
            <p>Email: {{ request('email') }}</p>
            <p>Phone: {{ request('phone') }}</p>

            <form action="/payments/process" method="POST">
                @csrf

                <input type="hidden" name="name" value="{{ request('name') }}">
                <input type="hidden" name="email" value="{{ request('email') }}">
                <input type="hidden" name="phone" value="{{ request('phone') }}">
                <input type="hidden" name="event" value="{{ request('event') }}">
                <input type="hidden" name="seats" value="{{ request('seats') }}">
                <input type="hidden" name="count" value="{{ request('count') }}">

                <input type="password" placeholder="Enter PIN" required>

                <button type="submit">Confirm Payment</button>

            </form>

        </div>

    </div>

</div>

<script>

function showPayment(type){

    document.getElementById('upi-box').style.display='none';
    document.getElementById('card-box').style.display='none';
    document.getElementById('netbanking-box').style.display='none';

    document.getElementById(type+'-box').style.display='block';
}

function showBankDetails(bank){

    if(bank!=''){
        document.getElementById('bank-details').style.display='block';
    }else{
        document.getElementById('bank-details').style.display='none';
    }

}

</script>

@endsection