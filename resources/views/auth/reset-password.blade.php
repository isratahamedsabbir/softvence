@extends('auth.app')

@section('content')
<!-- CONTAINER OPEN -->
<div class="col col-login mx-auto text-center">
    <a href="index.html" class="text-center">
        <img src="{{ asset($settings->logo ?? 'default/logo.png') }}" class="header-brand-img" alt="">
    </a>
</div>
<div class="container-login100">
    <div class="wrap-login100 p-0">
        <div class="card-body">
            <form class="card shadow-none" method="POST" action="{{ route('password.store') }}">
                @csrf

                <div class="card-body">
                    <div class="text-center">
                        <span class="login100-form-title">
                            Forgot Password
                        </span>
                        <p class="text-muted">Enter your email and instructions will be sent to you!</p>
                    </div>
                    <div class="pt-3" id="forgot">

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="form-group">
                            <label class="form-label" for="email">E-Mail:</label>
                            <input class="form-control" name="email" id="email" placeholder="Enter Your Email" type="email" value="{{ old('email') }}">
                        </div>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label class="form-label" for="password">Password:</label>
                            <input class="form-control" name="password" id="password" placeholder="Enter Your Password" type="password" value="{{ old('password') }}">
                        </div>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label class="form-label" for="password_confirmation">Confirm Password:</label>
                            <input class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Enter Your Confirm Password" type="password" value="{{ old('password_confirmation') }}">
                        </div>
                        @error('password_confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn btn-primary">
                                Reset Password
                            </button>
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- CONTAINER CLOSED -->
@endsection