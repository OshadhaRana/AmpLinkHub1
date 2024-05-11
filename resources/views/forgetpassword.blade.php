@extends('layout')
@section('title', 'Registration')
@section('content')
    <div class="contrainer">
        <div class="login-form">
            <h1>Forget Password</h1>
            <div class="container">
                <div class="main">
                    <div class="content">
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
                        <form  action="{{ route('forget.password.post') }}" method="POST">
                            @csrf
                            <input type="email" name="email" placeholder="Email" required autofocus>
                            <button class="btn" type="submit">
                                Register
                            </button>
                        </form>

                        <p class="account">Remebered<a href="{{ url('login') }}">Password</a></p>

                    </div>
                    <div class="form-img">
                        <img src="/Images/car_battery.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
