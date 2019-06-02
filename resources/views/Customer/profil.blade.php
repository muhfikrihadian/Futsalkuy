<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SportQ | Your Profile</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/native.css') }}">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.2/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body id="loginPage" class="row justify-content-around px-2 px-md-5 mx-0">
    <nav class="col">
      <span id="nav__brand">FutsalKuy <i class='bx bx-menu d-inline d-md-none'></i></span>
      <a href="#keuntungan">keuntungan</a>
      <a href="#gallery">gallery kami</a>
      <a href="#caraBooking">cara booking</a>
      <a href="">tentang kami</a>
      <a href="">{{ Auth::user()->name }}</a>
    </nav>
    <aside class="col-12 col-md-3 mb-3 mb-md-0 pl-md-5 d-flex justify-content-center">
      <figure id="my_profile">
        <img src="{{ asset('images/Users/people.png') }}" height="150" alt="My Profile">
        <figcaption>
          <strong>{{ Auth::user()->name }}</strong>
          <small>Bergabung pada 22 Maret 2019</small>
          <address>Alamat tinggal Jln Swadaya Gudang baru, Ciganjur, Jakarta Selatan</address>
        </figcaption>
      </figure>
    </aside>
    <main class="col-12 col-md-5 pr-md-3">
        <div class="row mx-0 flex-column align-items-end">
          <div class="col mb-5" id="jadwal_akan_datang">
            <h1>Jadwal Olahraga <br class="d-block d-md-none"> Yang Akan Datang</h1>
            <ul>
              <li>
                <span>Futsal</span>
                <time>25 Mei 2019 16:00 wib</time>
              </li>
              <li>
                <span>Futsal</span>
                <time>25 Mei 2019 16:00 wib</time>
              </li>
              <li>
                <span>Futsal</span>
                <time>25 Mei 2019 16:00 wib</time>
              </li>
            </ul>
          </div>
          <div class="col" id="jadwal_sudah_lalu">
            <h1>Jadwal Olahraga <br class="d-block d-md-none"> Yang Sudah Lalu</h1>
            <ul>
              <li>
                <span>Futsal</span>
                <time>22 Mei 2018 16:00 wib</time>
              </li>
              <li>
                <span>Futsal</span>
                <time>22 Mei 2018 16:00 wib</time>
              </li>
              <li>
                <span>Futsal</span>
                <time>22 Mei 2018 16:00 wib</time>
              </li>
            </ul>
          </div>
        </div>
    </main>
    <footer class="orange">
      <small>Copyright <time>{{ date('Y') }}</time> | PT Sportq</small>
    </footer>
    <script src="{{ asset('js/jquery.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/native.js') }}" charset="utf-8"></script>
  </body>
</html>
