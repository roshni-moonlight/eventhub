<style>
   .loading-box{
    text-align:center;
    margin-top:100px;
}

.loader {
    margin: 20px auto;
    border: 6px solid #eee;
    border-top: 6px solid green;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg);}
    100% { transform: rotate(360deg);}
} 
</style>

@extends('layouts.app')

@section('content')

<div class="loading-box">
    <h2>Processing Payment...</h2>

    <div class="loader"></div>

    <p>Please wait, do not refresh</p>
</div>

<script>
setTimeout(function(){

    const params = new URLSearchParams({
        name: "{{ $name }}",
        email: "{{ $email }}",
        phone: "{{ $phone }}",
        event: "{{ $event }}",
        seats: "{{ $seats }}",
        count: "{{ $count }}"
    });

    window.location.href = "/payments/success?" + params.toString();

},3000);
</script>

@endsection