<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/native.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/slick/slick-theme.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.2/css/boxicons.min.css' rel='stylesheet'>
    @yield('css')
    <title>SportQ | @yield('title')</title>
  </head>
  <body>
    @include('partials.nav')
    @yield('header')
    <main>
      @yield('content')
    </main>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-3">
            <img src="{{ asset('images/icon/logo.jpg') }}" height="90" alt="Our Logo">
          </div>
          <div class="col-12 col-md-4 d-flex align-items-center">
            <ul>
              <li>home</li>
              <li>headquarters</li>
              <li>contact us</li>
              <li>about</li>
              <li>blog</li>
            </ul>
          </div>
          <div class="col-12 col-md-5 d-flex flex-column justify-content-center">
            <p>Get our newsletter</p>
            <form action="index.html" id="form-subscribe" method="post">
              {{ csrf_field() }}
              <input type="email" class="flex-grow-1" placeholder="Enter your email" required>
              <button type="submit" class="btn">Subscribe</button>
            </form>
            <ul>
              <li><a href=""><i class='bx bxl-facebook-square' ></i></a></li>
              <li><a href=""><i class='bx bxl-instagram-alt' ></i></a></li>
              <li><a href=""><i class='bx bxl-twitter' ></i></a></li>
              <li><a href=""><i class='bx bxl-snapchat' ></i></a></li>
              <li><a href=""><i class='bx bxl-youtube' ></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script src="{{ asset('js/jquery.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/native.js') }}" charset="utf-8"></script>
    <script src="{{ asset('plugin/slick/slick.min.js') }}" charset="utf-8"></script>
    @yield('script')
  </body>
</html>
