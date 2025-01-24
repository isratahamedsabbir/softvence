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
        <div class="card-body" style="position: relative;">
                <button type="button" onclick="javascript:window.history.back();" class="btn btn-primary" style="position: absolute; top: 45px; z-index: 1; right: 45px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                    </svg>
                </button>
            <form class="card shadow-none" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="card-body">
                    <div class="text-center">
                        <span class="login100-form-title"> Forgot Password </span>
                        <p class="text-muted">Enter the email address registered on your account</p>
                    </div>
                    <div class="pt-3" id="forgot">
                        <div class="form-group">
                            <label class="form-label" for="eMail">E-Mail:</label>
                            <input class="form-control" name="email" id="eMail" placeholder="Enter Your Email" type="email" value="{{ old('email') }}">
                        </div>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn btn-primary">
                                Send Password Reset Link
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