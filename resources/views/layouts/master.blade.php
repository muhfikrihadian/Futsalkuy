<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/Bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/native.css') }}">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.2/css/boxicons.min.css' rel='stylesheet'>
    <title>SportQ | @yield('title')</title>
  </head>
  <body>
    <header>
      <div class="overlay">
        <nav>
          <span id="nav__brand">FutsalKuy <i class='bx bx-menu d-inline d-md-none'></i></span>
          <a href="#keuntungan">keuntungan</a>
          <a href="#gallery">gallery kami</a>
          <a href="#caraBooking">cara booking</a>
          <a href="">tentang kami</a>
          <a href="" id="nav__login">masuk</a>
        </nav>
        @yield('heading-text')
        @yield('button-header')
      </div>
    </header>
    <main>
      @yield('content')
    </main>
    <footer class="orange">
      <small>Copyright <time>{{ date('Y') }}</time> | PT Sportq</small>
    </footer>
    <script src="{{ asset('js/jquery.js') }}" charset="utf-8"></script>
    <script>
      $(document).ready(function() {
        $("#nav__brand i").click(function() {
          $(this).parents('nav').toggleClass("show-menu");
        });
        $(window).scroll(function() {
          if ($(this).scrollTop() > 50) {
            $("nav").addClass("scrolled");
          }
          else {
            $("nav").removeClass("scrolled");
          }
        });
      });
    </script>
    @yield('script')
  </body>
</html>
