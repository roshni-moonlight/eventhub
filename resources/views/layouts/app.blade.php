<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventHub - Event Ticket Booking</title>
    <style>
        *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#f5f7fa;
    min-height:100vh;
}

/* Navbar */

.navbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:20px 8%;
    background:#0f172a;
}

.logo h2{
    color:white;
    font-size:28px;
}

.nav-links{
    list-style:none;
    display:flex;
    gap:30px;
}

.nav-links a{
    text-decoration:none;
    color:white;
    font-size:16px;
    transition:.3s;
}

.nav-links a:hover{
    color:#38bdf8;
}

/* Main Content */

main{
    min-height:80vh;
    padding:40px 8%;
}

/* Footer */

footer{
    background:#0f172a;
    color:white;
    text-align:center;
    padding:25px;
}

.footer-content h3{
    margin-bottom:10px;
}

.footer-content p{
    margin:5px 0;
}

 /* Footer */

.footer{
    background:#0f172a;
    color:white;
    margin-top:80px;
}

.footer-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:40px;
    padding:50px 8%;
}

.footer-section h3{
    margin-bottom:15px;
    color:#38bdf8;
}

.footer-section p{
    line-height:1.8;
}

.footer-section ul{
    list-style:none;
}

.footer-section ul li{
    margin-bottom:10px;
}

.footer-section ul li a{
    text-decoration:none;
    color:white;
    transition:.3s;
}

.footer-section ul li a:hover{
    color:#38bdf8;
}
    </style>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header>
        <nav class="navbar">

            <div class="logo">
                <h2>EventHub</h2>
            </div>

            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/events">Events</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/reviews">Reviews</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/faq">FAQ</a></li>
            </ul>

        </nav>
    </header>

    <main>
        @yield('content')
    </main>

<footer class="footer">
    <div class="footer-container">

        <div class="footer-section">
            <h3>EventHub</h3>
            <p>
                Book tickets for concerts, festivals, sports events,
                conferences and entertainment shows.
            </p>
        </div>

        <div class="footer-section">
            <h3>Contact</h3>

            <p>Email: support@eventhub.com</p>
            <p>Phone: +91 9876543210</p>
            <p>Location: Chennai, India</p>
        </div>

    </div>
</footer>


    <footer>
        <div class="footer-content">
            <h3>EventHub</h3>
            <p>Book tickets for concerts, sports events, conferences and festivals.</p>
            <p>&copy; 2026 EventHub. All Rights Reserved.</p>
        </div>
    </footer>


    

</body>
</html>