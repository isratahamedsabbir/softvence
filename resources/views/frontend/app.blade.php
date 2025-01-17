@php
$systemSetting = App\Models\Setting::first();
@endphp

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ $title ?? '' }} | {{$systemSetting->system_name ?? env('APP_NAME')}}</title>
  <meta name="description" content="{!! strip_tags($description ?? $systemSetting->description ?? '') !!}">
  <meta name="keywords" content="{!! strip_tags($keywords ?? $systemSetting->keywords ?? '') !!}">
  <meta name="author" content="{{$author ?? $systemSetting->system_name ?? env('APP_NAME')}}">
  <link rel="icon" type="image/png" href="{{ !empty($icon) ? asset($icon) : asset($systemSetting->favicon ?? env('APP_LOGO')) }}" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  @include('frontend.partials.style')
</head>

<body>
  @include('frontend.partials.header')
  <main>
    @yield('content')
    @include('frontend.partials.footer')
  </main>
  @include('frontend.partials.script')
</body>

</html>
