@extends('backend.app')

@section('content')
<!--app-content open-->
<div class="app-content main-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            {{-- PAGE-HEADER --}}
            <div class="page-header">
                <div>
                    <h1 class="page-title">Stripe Settings <i class="fa-solid fa-triangle-exclamation text-danger" title="Warning"></i></h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Stripe</li>
                    </ol>
                </div>
            </div>
            {{-- PAGE-HEADER --}}


            <div class="row">
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card box-shadow-0">
                        <div class="card-body">
                            <form method="post" action="{{ route('setting.stripe.update') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row mb-4">
                                    <label for="stripe_key" class="col-md-3 form-label">Stripe Key</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('stripe_key') is-invalid @enderror" id="stripe_key"
                                            name="stripe_key" placeholder="Enter your stripe key" type="text"
                                            value="{{ env('STRIPE_KEY') ?? old('stripe_key') }}">
                                        @error('stripe_key')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="stripe_secret" class="col-md-3 form-label">Stripe Secret</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('stripe_secret') is-invalid @enderror" id="stripe_secret"
                                            name="stripe_secret" placeholder="Enter your stripe secret" type="text"
                                            value="{{ env('STRIPE_SECRET') ?? old('stripe_secret') }}">
                                        @error('stripe_secret')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="stripe_webhook_secret" class="col-md-3 form-label">Stripe Webhook Secret</label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('stripe_webhook_secret') is-invalid @enderror" id="stripe_webhook_secret"
                                            name="stripe_webhook_secret" placeholder="Enter your stripe webhook secret" type="text"
                                            value="{{ env('STRIPE_WEBHOOK_SECRET') ?? old('stripe_webhook_secret') }}">
                                        @error('stripe_webhook_secret')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-sm-9">
                                        <div>
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- CONTAINER CLOSED -->
@endsection



@push('scripts')
@endpush