@extends('auth.app')

@section('content')
<!-- CONTAINER OPEN -->
<div class="col col-login mx-auto text-center">
    <a href="index.html" class="text-center">
        <img src="{{ asset($settings->logo ?? 'default/logo.png') }}" class="header-brand-img" alt="">
    </a>
</div>
<div class="container-login100">
    <div class="wrap-login100 p-5 bg-white rounded-lg shadow" style="max-width: 400px;">
        <div class="card-body text-center">
            <h4 class="mb-4 font-weight-bold">Welcome Back!</h4>
            <p class="text-muted mb-4">Log in to access your dashboard</p>
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg btn-block">
                Login
            </a>
        </div>
    </div>
</div>
<!-- CONTAINER CLOSED -->
@endsection
