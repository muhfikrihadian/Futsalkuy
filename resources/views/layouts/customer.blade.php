<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SportQ</title>
    <link rel="icon" type="image/png" href="{{ asset('images/icon/logo.png')}}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/native.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/slick/slick-theme.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.2/css/boxicons.min.css' rel='stylesheet'>
    @yield('css')
  </head>
  <body>
    @include('partials.nav')
    @yield('content')
    <script src="{{ asset('js/jquery.js') }}" charset="utf-8"></script>
    <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('plugin/slick/slick.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/native.js') }}" charset="utf-8"></script>
  </body>
</html>
