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
          <span id="nav__brand"><a href="{{ url('/') }}">FutsalKuy</a> <i class='bx bx-menu d-inline d-md-none'></i></span>
          <a href="#keuntungan">keuntungan</a>
          <a href="#gallery">gallery kami</a>
          <a href="#caraBooking">cara booking</a>
          <a href="">tentang kami</a>
          @guest
            <a href="{{ route('login') }}" id="nav__login">masuk</a>
          @endguest
          @auth
            <a href="{{ route('login') }}" class="orange rounded" id="nav__login">dashboard</a>
          @endauth
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
    <script src="{{ asset('js/native.js') }}" charset="utf-8"></script>
    @yield('script')
  </body>
</html>
