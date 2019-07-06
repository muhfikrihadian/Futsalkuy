@extends('layouts.customer')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 offset-md-1">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="height: 300px;">
          <div class="carousel-item active">
            <img src="https://images.pexels.com/photos/39562/the-ball-stadion-football-the-pitch-39562.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://images.pexels.com/photos/39562/the-ball-stadion-football-the-pitch-39562.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://images.pexels.com/photos/39562/the-ball-stadion-football-the-pitch-39562.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-md-10 offset-md-1 bg-white" style="height: 150px;">
    <div class="row">
      <div class="col-md-4">
        <img src="{{ asset('images/Users/Mitra/v.jpeg') }}" style="width: 100%; height: 100px;">
      </div>
      <div class="col-md-6">
      <h4>Nama Mitra : Planet Futsal</h4>
      <h4>Nomor Telephone : Planet Futsal</h4>
      <h4>Kota : Jakarta Utara</h4>
      <h4>Alamat : Jalan Blablabla</h4>
      </div>
      </div>
    </div>
  </div>
  <div class="row">
  <center>
  <h1 style="text-align: center; margin-left: 300px;">Daftar Lapangan Planet Futsal</h1>
  <hr>
  </center>
  <div class="col-md-10 offset-md-1">
    <div class="card-group">
      @if(isset($field))
      @foreach($field as $lapangan)
      <div class="card mr-2 ml-2 mt-4 mb-4 col-md-4">
        <img src="{{ asset('images/Lapangan/'.$lapangan->foto)}}" class="d-block w-100" class="card-img-top" style="width: 100%; height: 100" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{ $lapangan->nama }}</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Rp.{{ $lapangan->tarif }} /Jam</li>
            <li class="list-group-item">Rating : 7/10</li>
          </ul>
        </div>
        <div class="card-footer">
          <a href="{{ route('customer.lapangan', ['id' => $lapangan->id]) }}" class="btn btn-primary">Read More &rarr;</a>
        </div>
      </div>
      @endforeach
      @endif
    </div>
    </div>
  </div>
</div>
@endsection
