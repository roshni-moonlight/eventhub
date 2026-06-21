<style>
.auth-section{
    min-height:80vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.auth-box{
    width:400px;
    background:white;
    padding:30px;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,.1);
}

.auth-box h1{
    text-align:center;
    margin-bottom:20px;
}

.auth-box form{
    display:flex;
    flex-direction:column;
    gap:15px;
}

.auth-box input{
    padding:12px;
    border:1px solid #ddd;
    border-radius:8px;
}

.auth-box button{
    padding:12px;
    border:none;
    background:#2563eb;
    color:white;
    border-radius:8px;
    cursor:pointer;
}

.auth-box button:hover{
    background:#1d4ed8;
} 
</style>

@extends('layouts.app')

@section('content')

<section class="auth-section">

    <div class="auth-box">

        <h1>Admin Login</h1>

        @if(session('error'))
            <p style="color:red">
                {{ session('error') }}
            </p>
        @endif

        <form action="/admin/login" method="POST">
            @csrf

            <input
                type="text"
                name="name"
                placeholder="Admin Name"
                required>

            <input
                type="password"
                name="password"
                placeholder="Admin Password"
                required>

            <button type="submit">
                Login
            </button>

        </form>

    </div>

</section>

@endsection