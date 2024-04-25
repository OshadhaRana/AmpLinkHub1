@extends('layout')
@section('title', 'Registration')
@section('content')
    <div class="contrainer">
        <div class="login-form">
            <h1>Login</h1>
            <div class="container">
                <div class="main">
                    <div class="content">
                        <h2>Register</h2>
                        <div class="mt-5">
                            @if($errors->any())
                                <div class="col-12">
                                    @foreach ($errors->all() as $error)
                                        <div class="alert">{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif

                            @if(session()->has('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            @if(session()->has('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                        </div>
                    <form  action="{{ route('registration.post') }}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="User Name" required autofocus> <!-- autofocus enables the cursor to load up on this input field when the web page is loaded-->
                        <input type="email" name="email" placeholder="Email" required autofocus>
                        <input type="password" name="password" placeholder="User Password" required autofocus>
                        <button class="btn" type="submit">
                            Register
                        </button>
                    </form>
                    <p class="account">Forgot <a href="#">Password</a></p>
                    <p class="account">Already have an  <a href="{{ url('login') }}">Account</a></p>

                </div>
                <div class="form-img">
                    <img src="/Images/car_battery.png" alt="">
                </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection