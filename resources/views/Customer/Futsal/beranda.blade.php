@extends('layouts.customer')

@section('css')
  <style media="screen">
    #outer-lapangan figure img {
      display: block;
      width: 100%;
    }
    #outer-lapangan figure address {
      margin-bottom: 10px;
    }
    #outer-lapangan figure var {
      font-style: normal;
    }
  </style>
@endsection

@section('content')
  <div class="container">
    <div class="row mx-0 py-5">
      <aside class="col-12 col-md-4 px-0 mb-3 mb-md-0">
        <form action="" method="post">
          <h1 class="h4 mb-3 text-dark">Urut Berdasarkan</h1>
          <select class="custom-select" required>
            <option value="1" selected>Kota</option>
            <option value="2">Rating</option>
            <option value="3">Harga</option>
          </select>
        </form>
      </aside>
      <main class="col px-0 px-md-3">
        <div class="row" id="outer-lapangan">
          {{-- @if(isset($vendor))
          @foreach($vendor as $mitra) --}}
          <div class="col-12 col-md-6">
            <figure>
              <img src="{{ asset('images/Lapangan/lapangan1.jpg') }}" height="200" alt="Gambar Lapangan">
              <figcaption class="d-flex flex-column py-3">
                <h2 class="text-secondary">Benhill Futsal</h2>
                <address>Jln. Blablabla No.98, Jakarta Timur</address>
                <var>Rp. 80.000 / Jam</var>
                <time>07:00 - 23:00</time>
              </figcaption>
            </figure>
          </div>
          <div class="col-12 col-md-6">
            <figure>
              <img src="{{ asset('images/Lapangan/lapangan1.jpg') }}" height="200" alt="Gambar Lapangan">
              <figcaption class="d-flex flex-column py-3">
                <h2 class="text-secondary">Benhill Futsal</h2>
                <address>Jln. Blablabla No.98, Jakarta Timur</address>
                <var>Rp. 80.000 / Jam</var>
                <time>07:00 - 23:00</time>
              </figcaption>
            </figure>
          </div>
          <div class="col-12 col-md-6">
            <figure>
              <img src="{{ asset('images/Lapangan/lapangan1.jpg') }}" height="200" alt="Gambar Lapangan">
              <figcaption class="d-flex flex-column py-3">
                <h2 class="text-secondary">Benhill Futsal</h2>
                <address>Jln. Blablabla No.98, Jakarta Timur</address>
                <var>Rp. 80.000 / Jam</var>
                <time>07:00 - 23:00</time>
              </figcaption>
            </figure>
          </div>
          <div class="col-12 col-md-6">
            <figure>
              <img src="{{ asset('images/Lapangan/lapangan1.jpg') }}" height="200" alt="Gambar Lapangan">
              <figcaption class="d-flex flex-column py-3">
                <h2 class="text-secondary">Benhill Futsal</h2>
                <address>Jln. Blablabla No.98, Jakarta Timur</address>
                <var>Rp. 80.000 / Jam</var>
                <time>07:00 - 23:00</time>
              </figcaption>
            </figure>
          </div>
          <div class="col-12 col-md-6">
            <figure>
              <img src="{{ asset('images/Lapangan/lapangan1.jpg') }}" height="200" alt="Gambar Lapangan">
              <figcaption class="d-flex flex-column py-3">
                <h2 class="text-secondary">Benhill Futsal</h2>
                <address>Jln. Blablabla No.98, Jakarta Timur</address>
                <var>Rp. 80.000 / Jam</var>
                <time>07:00 - 23:00</time>
              </figcaption>
            </figure>
          </div>
          <div class="col-12 col-md-6">
            <figure>
              <img src="{{ asset('images/Lapangan/lapangan1.jpg') }}" height="200" alt="Gambar Lapangan">
              <figcaption class="d-flex flex-column py-3">
                <h2 class="text-secondary">Benhill Futsal</h2>
                <address>Jln. Blablabla No.98, Jakarta Timur</address>
                <var>Rp. 80.000 / Jam</var>
                <time>07:00 - 23:00</time>
              </figcaption>
            </figure>
          </div>
        {{-- @endforeach
        @endif --}}
        </div>
        <div class="row py-3">
          {{-- {{ $vendor->links() }} --}}
          <ul class="pagination mx-auto">
            <li class="page-item disabled"><span class="page-link">Prev</span></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item" aria-current="page"><span class="page-link">2</span></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </div>
      </main>
    </div>
  </div>
@endsection
