@extends('layout')
@section('title', 'Login')
@section('content')

    <div class="contrainer">
        <div class="login-form">
            <h1>Login</h1>
            <div class="container">
                <div class="main">
                    <div class="content">
                        <h2>Log In</h2>
                        <div class="mt-5">
                            @if($errors->any())
                                <div class="col-12">
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger">{{ $error }}</div>
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
                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <input type="text" name="name" placeholder="User Name" required autofocus> <!-- autofocus enables the cursor to load up on this input field when the web page is loaded-->
                            <input type="password" name="password" placeholder="User Password" required autofocus>
                            <button class="btn" type="submit">
                                Login
                            </button>
                        </form>
                        <p class="account">Don't Have An Account <a href="{{ url('registration') }}">Register</a></p>
    
                    </div>
                    <div class="form-img">
                        <img src="/Images/tyre_emoji.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection