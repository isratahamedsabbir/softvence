@php
$settings = \App\Models\Setting::first();
@endphp
<!doctype html>
<html lang="en" dir="ltr">
<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{!! strip_tags($settings->description ?? '') !!}">
    <meta name="author" content="{{ $settings->author ?? '' }}">
    <meta name="keywords" content="{!! strip_tags($settings->keywords ?? '') !!}">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset($settings->favicon ?? 'default/logo.png') }}" />

    <!-- TITLE -->
    <title>{{ config('app.name') }} - {{ $title ?? $settings->title ?? '' }}</title>
    <!-- Scripts -->

    @vite(['resources/js/app.js'])
    
    @include('developer.partials.styles')
    
    
</head>

<body class="ltr app sidebar-mini">
    @include('developer.partials.switcher')

    @include('developer.partials.loader')

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            @include('developer.partials.header')
            @include('developer.partials.sidebar')

            @yield('content')
        </div>

        @include('developer.partials.footer')

    </div>
    <!-- page -->
    @include('developer.partials.scripts')
    
</body>

</html>