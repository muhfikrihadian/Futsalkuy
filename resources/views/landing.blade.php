@extends('layouts.master')
@section('title', 'Booking Lapangan Jadi Lebih Mudah')
@section('heading-text')
  <h1>Pemesanan Lapangan <br class="d-none d-md-block"> Jadi Lebih Mudah</h1>
@endsection
@section('button-header')
  <a href="#caraBooking" class="btn rounded orange">lihat caranya <i class='bx bx-caret-down'></i></a>
@endsection
@section('content')
  <section id="keuntungan">
    <div class="container">
      <h1>Keuntungan #BookingFutsal Dengan FutsalKuy</h1>
      <div class="row">
        <div class="col-12 col-md-4 mb-5">
          <figure>
            <img src="{{ asset('images/icon/pelayanan.svg') }}" height="70" alt="Landing Icon">
            <figcaption>Pelayanan Cepat</figcaption>
          </figure>
        </div>
        <div class="col-12 col-md-4 mb-5">
          <figure>
            <img src="{{ asset('images/icon/pembayaran.svg') }}" height="70" alt="Landing Icon">
            <figcaption>Pembayaran Mudah</figcaption>
          </figure>
        </div>
        <div class="col-12 col-md-4 mb-5">
          <figure>
            <img src="{{ asset('images/icon/money.svg') }}" height="70" alt="Landing Icon">
            <figcaption>Harga Bersahabat</figcaption>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <section id="gallery">
    <div class="container">
      <h1>Beberapa Gallery Kami</h1>
      <div class="row">
        <div class="col-12 col-md-4">
          <img src="{{ asset('images/kegiatan1.jpg') }}" height="170" alt="Photo Gallery">
        </div>
        <div class="col-12 col-md-4">
          <img src="{{ asset('images/kegiatan2.jpg') }}" height="170" alt="Photo Gallery">
        </div>
        <div class="col-12 col-md-4">
          <img src="{{ asset('images/kegiatan3.jpg') }}" height="170" alt="Photo Gallery">
        </div>
        <div class="col-12 col-md-4">
          <img src="{{ asset('images/kegiatan4.jpg') }}" height="170" alt="Photo Gallery">
        </div>
        <div class="col-12 col-md-4">
          <img src="{{ asset('images/kegiatan1.jpg') }}" height="170" alt="Photo Gallery">
        </div>
        <div class="col-12 col-md-4">
          <img src="{{ asset('images/kegiatan2.jpg') }}" height="170" alt="Photo Gallery">
        </div>
      </div>
      <a href="" id="gallery__btn" class="btn orange rounded col col-md-auto">lihat lebih <i class='bx bx-chevrons-right' style='color:#ffffff'  ></i></a>
    </div>
  </section>
  <section id="caraBooking">
    <div class="container">
      <h1>Cara #BookingFutsal Dengan FutsalKuy</h1>
      <ol>
        <li>1) Masuk Dengan Akun Sosial Mediamu</li>
        <li>2) Pilih lokasi futsal yang kamu inginkan</li>
        <li>3) Pilih jam dan hari</li>
        <li>4) Lakukan pembayaran</li>
        <li>5) Sudah! Kamu sudah berhasil #BookingFutsal</li>
      </ol>
    </div>
  </section>
  <section id="aboutus">
    <div class="container">
      <h1>Tentang Kami</h1>
      <div class="row">
        <div class="col-12 col-md-6 mb-5 mb-md-0 align-items-center d-flex">
          <p>FutsalKuy adalah sebuah platform <br> Nunc euismod felis ac facilisis lobortis. <br> Praesent faucibus, quam quis molestie vestibulum</p>
        </div>
        <div class="col-12 col-md-6">
          <div class="row">
            <figure class="col-12 col-md-4">
              <img src="{{ asset('images/Users/people.png') }}" height="150" alt="Kami">
              <figcaption>
                <strong>Nama Orang</strong>
                <small>Jabatan</small>
              </figcaption>
            </figure>
            <figure class="col-12 col-md-4">
              <img src="{{ asset('images/Users/people.png') }}" height="150" alt="Kami">
              <figcaption>
                <strong>Nama Orang</strong>
                <small>Jabatan</small>
              </figcaption>
            </figure>
            <figure class="col-12 col-md-4">
              <img src="{{ asset('images/Users/people.png') }}" height="150" alt="Kami">
              <figcaption>
                <strong>Nama Orang</strong>
                <small>Jabatan</small>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
