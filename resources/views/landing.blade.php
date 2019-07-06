@extends('layouts.master')
@section('header')
  <header id="landingPage">
    <h1>SportQ</h1>
    <h2>Membuat hobimu menjadi lebih mudah</h2>
  </header>
@endsection
@section('content')
  <section id="outer-mitra">
    <div class="container">
      <h1>pilihan mitra dengan beragam jenis lapangan terbaik</h1>
      <div class="mitra row">
        <div class="mitra__single">
          <figure>
            <img src="{{ asset('images/Lapangan/lapangan1.jpg') }}" height="350" alt="Lapangan Futsal">
            <figcaption>
              <h3>Nama Lapangan</h3>
              <ul>
                <li>Lokasi: <address>Jalan Swadaya</address></li>
                <li>Kota: <address>Jakarta Selatan</address></li>
                <li>Tarif Lapangan: <var>Rp. 100k / jam</var></li>
                <li>Rating: <span>9/10</span></li>
              </ul>
            </figcaption>
          </figure>
        </div>
        <div class="mitra__single">
          <figure>
            <img src="{{ asset('images/Lapangan/lapangan2.jpg') }}" height="350" alt="Lapangan Futsal">
            <figcaption>
              <h3>Nama Lapangan</h3>
              <ul>
                <li>Lokasi: <address>Jalan Swadaya</address></li>
                <li>Kota: <address>Jakarta Selatan</address></li>
                <li>Tarif Lapangan: <var>Rp. 100k / jam</var></li>
                <li>Rating: <span>9/10</span></li>
              </ul>
            </figcaption>
          </figure>
        </div>
        <div class="mitra__single">
          <figure>
            <img src="{{ asset('images/Lapangan/lapangan3.jpg') }}" height="350" alt="Lapangan Futsal">
            <figcaption>
              <h3>Nama Lapangan</h3>
              <ul>
                <li>Lokasi: <address>Jalan Swadaya</address></li>
                <li>Kota: <address>Jakarta Selatan</address></li>
                <li>Tarif Lapangan: <var>Rp. 100k / jam</var></li>
                <li>Rating: <span>9/10</span></li>
              </ul>
            </figcaption>
          </figure>
        </div>
        <div class="mitra__single">
          <figure>
            <img src="{{ asset('images/Lapangan/lapangan1.jpg') }}" height="350" alt="Lapangan Futsal">
            <figcaption>
              <h3>Nama Lapangan</h3>
              <ul>
                <li>Lokasi: <address>Jalan Swadaya</address></li>
                <li>Kota: <address>Jakarta Selatan</address></li>
                <li>Tarif Lapangan: <var>Rp. 100k / jam</var></li>
                <li>Rating: <span>9/10</span></li>
              </ul>
            </figcaption>
          </figure>
        </div>
        <div class="mitra__single">
          <figure>
            <img src="{{ asset('images/Lapangan/lapangan3.jpg') }}" height="350" alt="Lapangan Futsal">
            <figcaption>
              <h3>Nama Lapangan</h3>
              <ul>
                <li>Lokasi: <address>Jalan Swadaya</address></li>
                <li>Kota: <address>Jakarta Selatan</address></li>
                <li>Tarif Lapangan: <var>Rp. 100k / jam</var></li>
                <li>Rating: <span>9/10</span></li>
              </ul>
            </figcaption>
          </figure>
        </div>
        <div class="mitra__single">
          <figure>
            <img src="{{ asset('images/Lapangan/lapangan2.jpg') }}" height="350" alt="Lapangan Futsal">
            <figcaption>
              <h3>Nama Lapangan</h3>
              <ul>
                <li>Lokasi: <address>Jalan Swadaya</address></li>
                <li>Kota: <address>Jakarta Selatan</address></li>
                <li>Tarif Lapangan: <var>Rp. 100k / jam</var></li>
                <li>Rating: <span>9/10</span></li>
              </ul>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <section id="whyus">
    <div class="container">
      <div class="row">
        <figure class="col-12 col-md-4 text-center">
          <img src="{{ asset('images/icon/connection.svg') }}" class="d-block mx-auto" height="90" alt="">
          <figcaption class="py-3">
            <h3>500+ Mitra</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero iusto, aliquam et magnam iure provident quia cumque soluta eos minus dolorem eius? Magni architecto corrupti, eveniet magnam sit explicabo asperiores.</p>
          </figcaption>
        </figure>
        <figure class="col-12 col-md-4 text-center">
          <img src="{{ asset('images/icon/store.svg') }}" class="d-block mx-auto" height="90" alt="">
          <figcaption class="py-3">
            <h3>1000+ Lapangan</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt saepe ipsam sit delectus mollitia inventore totam consequuntur. Veritatis quaerat necessitatibus quisquam nesciunt ab odit temporibus, voluptates, alias doloremque facere. Aperiam.</p>
          </figcaption>
        </figure>
        <figure class="col-12 col-md-4 text-center">
          <img src="{{ asset('images/icon/group.svg') }}" class="d-block mx-auto" height="90" alt="">
          <figcaption class="py-3">
            <h3>6000+ pengguna</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi alias nisi quaerat iusto autem tenetur. Dignissimos quas iure dolor odit hic, sint ipsam cumque eos consequatur expedita commodi, provident est.</p>
          </figcaption>
        </figure>
      </div>
    </div>
  </section>
  <section id="joinus">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-4 d-flex flex-column justify-content-center">
          <h1 class="mb-3">Ayo Menjadi Mitra SportQ</h1>
          <p>Daftarkan sekarang juga lapanganmu dan rasakan benefitnya</p>
        </div>
        <div class="col-6">
          <img src="{{ asset('images/joinus.png') }}" height="300" class="col px-0">
        </div>
      </div>
    </div>
  </section>
  <section id="ourpeople">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4">
          <figure>
            <img src="" alt="Jabatan">
            <figcaption>
              <h3>Sigit Prostio</h3>
              <p>CMO SportQ</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-12 col-md-4 px-4">
          <figure>
            <img src="" alt="Jabatan">
            <figcaption>
              <h3>Muhammad Fikri Hadian</h3>
              <p>CEO SportQ</p>
            </figcaption>
          </figure>
        </div>
        <div class="col-12 col-md-4">
          <figure>
            <img src="" alt="Jabatan">
            <figcaption>
              <h3>Thereo Sebastian</h3>
              <p>CTO SportQ</p>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('script')
  <script>
    $(document).ready(function() {
      $(".mitra").slick({
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button"><i class="bx bx-chevron-left"></i></button>',
        nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button"><i class="bx bx-chevron-right"></i></button>',
        slidesToScroll: 3,
        responsive: [
          {
            breakpoint: 993,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: true
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
    });
  </script>
@endsection
