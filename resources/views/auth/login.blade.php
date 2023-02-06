@extends('layouts.app')

@section('content')


    <!DOCTYPE html>
<html>
<head>
    <title>Slide Navbar</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/login.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">
    <div class=" signup">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="chk" aria-hidden="true">Login</label>

            <div class="content">
                <div class="row ">
                    {{-- email user for login --}}
                    <div class="col-md-5 m-auto">
                        <label for="email" class="col-md-8 h5 ">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class=" form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
             </span>
                        @enderror
                    </div>


                    <div class="col-md-5 m-auto ">
                        <label for="password" class="col-md-8 h5 ">{{ __('Password') }}</label>
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror" name="password" required
                               autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
            <button>Login</button>
        </form>
    </div>


    <div class="login">


        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="chk" aria-hidden="true">Sign up</label>



            <div class="content">
                <div class="row ">
                    <div class="col-md-5 m-auto">
                        <label for="name" class="col-md-8 h5 ">{{ __('name') }}</label>
                        <input id="name" type="text" class=" form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-md-5 m-auto ">
                        <label for="email" class="col-md-8 h5 ">{{ __('Email Address') }}</label>
                        <input id="email" type="email"
                               class="form-control @error('email') iis-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-5 m-auto">
                        <label for="password" class="col-md-8 h5 ">{{ __('Password') }}</label>
                        <input id="password" type="password" class=" form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-md-5 m-auto ">
                        <label for="password-confirm" class="col-md-8 h5 ">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                    </div>
                </div>
            </div>






            <button>Sign up</button>
        </form>
    </div>
</div>
</body>
</html>

@endsection
