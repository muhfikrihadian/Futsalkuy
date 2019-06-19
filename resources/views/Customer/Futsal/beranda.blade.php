@extends('layouts.customer')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4 col-sm-12">
      <div class="card my-4 position-fixed">
        <h5 class="card-header">Rekomendasi Lapangan</h5>
      
      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="..." class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
            </div>
            @if(isset($field))
            @foreach($field as $lapangan)
            <div class="carousel-item">
              <img src="{{ asset('images/Lapangan/'.$lapangan->foto)}}" class="d-block w-100 rounded-sm lapanganslider" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
            </div>
            @endforeach
            @endif
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      </div>
    </div>
    <div class="col-md-8 margintopdp">
      @if(isset($vendor))
      @foreach($vendor as $mitra)
      <div class="card mb-4 wow fadeInUp">
        <img class="card-img-top" src="{{ asset('images/Users/Mitra/'.$mitra->foto)}}" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">{{ $mitra->nama }}</h4>
          <p class="card-text">{{ $mitra->kota }}</p>
          <a href="{{ route('customer.mitraInfo', ['nama' => $mitra->nama]) }}" class="btn btn-primary">Lihat &rarr;</a>
        </div>
      </div>
      @endforeach
      @endif
      {{ $vendor->links() }}
    </div>
  </div>
</div>
@endsection
