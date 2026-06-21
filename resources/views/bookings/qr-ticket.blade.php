<!DOCTYPE html>
<html>
<head>
    <title>Event Entry Pass</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:#f4f4f4;
            font-family:Arial,sans-serif;
        }

        .ticket{
            width:350px;
            background:white;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 5px 20px rgba(0,0,0,.2);
        }

        .header{
            background:#111827;
            color:white;
            text-align:center;
            padding:20px;
        }

        .header h1{
            font-size:24px;
        }

        .content{
            padding:20px;
        }

        .content p{
            margin:10px 0;
            font-size:16px;
        }

        .footer{
            text-align:center;
            padding:20px;
            border-top:1px dashed #ccc;
        }

        .footer h3{
            color:green;
        }

    </style>

</head>
<body>

<div class="ticket">

    <div class="header">
        <h1>🎟 Event Entry Pass</h1>
    </div>

    <div class="content">

        <p><strong>Booking ID:</strong> {{ $booking->booking_id }}</p>

        <p><strong>Name:</strong> {{ $booking->name }}</p>

        <p><strong>Event:</strong> {{ $booking->event }}</p>

        <p><strong>Seats:</strong> {{ $booking->seats }}</p>

        <p><strong>Tickets:</strong> {{ $booking->tickets }}</p>

        <p><strong>Amount Paid:</strong> ₹{{ $booking->amount }}</p>

    </div>

    <div class="footer">
        <h3>✓ VALID ENTRY TICKET</h3>
    </div>

</div>

</body>
</html>