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
            <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="login100-form-title">
                    <h2>Sign Up</h2>
                </div>

                <div class="wrap-input100 validate-input" data-bs-validate="Valid name is required: sabbir">
                    <input class="input100" type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="zmdi zmdi-account" aria-hidden="true"></i>
                    </span>
                </div>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="wrap-input100 validate-input" data-bs-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="zmdi zmdi-email" aria-hidden="true"></i>
                    </span>
                </div>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="wrap-input100 validate-input" data-bs-validate="Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                    </span>
                </div>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="wrap-input100 validate-input" data-bs-validate="Password is required">
                    <input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                    </span>
                </div>
                @error('password_confirmation')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="text-end pt-1">
                    <p class="mb-0"><a href="{{ route('login') }}" class="text-primary ms-1">login here</a></p>
                </div>

                @if(env('RECAPTCHA_ENABLE') === 'true')
                <div class="bi-login-input-wrapper save mt-3 mb-1">
                    {!! htmlFormSnippet() !!}
                    @if ($errors->has('g-recaptcha-response'))
                        <div>
                            <small class="text-danger">
                                {{ $errors->first('g-recaptcha-response') }}
                            </small>
                        </div>
                    @endif
                </div>
                @endif

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn btn-primary">
                        Sign Up
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- CONTAINER CLOSED -->
@endsection

