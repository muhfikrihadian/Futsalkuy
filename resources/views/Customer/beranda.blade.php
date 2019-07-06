@extends('layouts.customer')
@section('content')
<div class="container">
  <div class="row">
  <div class="col-md-3 offset-1 mt-5 wow fadeInUp">
      <a href="{{ route('customer.indexFutsal') }}">
      <div class="card">
        <img src="{{ asset('images/icon/futsal.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h1 class="card-text align-center">Futsal</h1>
        </div>
      </div>
      </a>
    </div>
    <div class="col-md-3 offset-1 mt-5 wow fadeInUp">
      <div class="card">
        <img src="{{ asset('images/icon/soccer.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h1 class="card-text align-center">Sepak Bola</h1>
        </div>
      </div>
    </div>
    <div class="col-md-3 offset-1 mt-5 wow fadeInUp">
      <div class="card">
        <img src="{{ asset('images/icon/volley.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h1 class="card-text align-center">Volley</h1>
        </div>
      </div>
    </div>
    <div class="col-md-3 offset-1 mt-5 wow fadeInUp">
      <div class="card">
        <img src="{{ asset('images/icon/badminton.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h1 class="card-text align-center">Badminton</h1>
        </div>
      </div>
    </div>
    <div class="col-md-3 offset-1 mt-5 wow fadeInUp">
      <div class="card">
        <img src="{{ asset('images/icon/tennis.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h1 class="card-text align-center">Tennis</h1>
        </div>
      </div>
    </div>
    <div class="col-md-3 offset-1 mt-5 wow fadeInUp">
      <div class="card">
        <img src="{{ asset('images/icon/basket.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h1 class="card-text align-center">Basket</h1>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
