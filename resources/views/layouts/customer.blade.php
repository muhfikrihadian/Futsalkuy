<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SportQ</title>
    <link href="{{ asset('css/blog-home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog-post.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link rel="icon" type="image/png" href="{{ asset('images/icon/logo.png')}}">
</head>
<body class="bgcolorsportq">
    <nav class="navbar navbar-expand-lg navbar-dark primarysportq fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{ route('customer.index') }}">SportQ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
            </span>
          </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="no-icon">{{ Auth::user()->name }}</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ route('customer.profile') }}">Profil</a>
            <a href="{{ route('logout') }}" class="dropdown-item"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Log Out <i class="fa fa-sign-out" aria-hidden="true"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </li>
</ul>
</div>
</div>
</nav>
@yield('content')
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-4.1/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>
