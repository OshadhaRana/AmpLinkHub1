@extends('homelayout')
@section('title', 'Login')
@section('content')

<header>
    <a href="#" class="logo"><img src="Images/amplinkhub-favicon-color.png" alt="logo" > AmpLinkHub</a>

    <ul class="navlist">
        <li><a href="/Home">Home</a></li>
        <li><a href="{{ route('viewproducts') }}">Products</a></li>
        <li><a href="/login">Batt & Tire Lifespan Tracker</a></li>

    </ul>


    <div class="bx bx-menu" id="menu-icon"></div>
</header>


    <section class="hero">
        <div class="hero-text">
            <h5>#1 Best Selling Brand</h5>
            <h4>Last Long, Really Long</h4>
            <h1>Amaron</h1>
            <p>Discover unparalleled power and reliability with our selection of Amaron batteries, <br>ensuring your vehicle stays charged and ready for the road ahead.</p>

            <a href="{{url('login')}}" class="ctaa"><i class="ri-battery-2-charge-fill"></i>Battery Health</a>
        </div>

        <div class="hero-img">
            <img src="Images/car_battery.png">
        </div>
    </section>




<div class="icons">
    <a href="#"><i class="ri-instagram-line"></i></a>
    <a href="#"><i class="ri-facebook-circle-line"></i></a>
    <a href="#"><i class="ri-mail-line"></i></a>
</div>

<div class="scroll-down">
    <button class="ri-arrow-down-s-fill" onclick="scrollToBottom()"></button>

</div>

