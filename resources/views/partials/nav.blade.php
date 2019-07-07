<nav id="navDesktop">
  <ul>
    <li>
      <a href="" class="brand-logo">
        <img src="{{ asset('images/icon/futsalkuy-white.png') }}" height="80">
      </a>
    </li>
    <li>
      <form action="" class="row justify-content-center" method="get">
        {{ csrf_field() }}
        <div class="col-12 col-md-3 mb-4 mb-md-0 px-0 px-md-2">
          <select required>
            <option value="" selected disabled>Cari Berdasarkan</option>
            <option value="">Kategori Olahraga</option>
            <option value="">Kota</option>
          </select>
        </div>
        <div class="col-12 col-md-9 mb-4 mb-md-0 px-0 px-md-2">
          <input type="text" placeholder="Cari Lapangan. Contoh: Futsal Cawang" required>
          <button type="submit" class="btn"><i class='bx bx-search-alt'></i></button>
        </div>
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
