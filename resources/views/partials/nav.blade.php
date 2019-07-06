<nav class="d-none d-md-block navbar navbar-expand-lg navbar-light" id="navDesktop">
  <ul>
    <li>
      <a href="" class="brand-logo">
        <img src="{{ asset('images/icon/futsalkuy-white.png') }}" height="80">
      </a>
    </li>
    <li>
      <form action="" class="row justify-content-center" method="get">
        {{ csrf_field() }}
        <div class="col-3">
          <select class="" name="">
            <option value="" selected disabled>Cari Berdasarkan</option>
            <option value="">Kategori Olahraga</option>
            <option value="">Kota</option>
          </select>
        </div>
        <div class="col">
          <input type="text" placeholder="Cari Lapangan. Contoh: Futsal Cawang">
        </div>
        <button type="submit"><i class='bx bx-search-alt'></i></button>
      </form>
    </li>
    @guest
      <li>
        <a href="{{ route('login') }}">sign in</a>
      </li>
      <li>
        <a href="{{ route('register') }}">sign up</a>
      </li>
    @endguest
    @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Sign Out</a>
        </div>
      </li>
    @endauth
  </ul>
</nav>
