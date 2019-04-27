@extends('layouts.customer')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 margintopdp">
      @if(isset($field))
      @foreach($field as $lapangan)
      <div class="card mb-4 wow fadeInUp">
        <img class="card-img-top" src="{{ asset('images/Lapangan/'.$lapangan->foto)}}" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title">{{ $lapangan->nama }}</h4>
          <p class="card-text">{{ $lapangan->tarif }}</p>
          <a href="{{ route('customer.lapangan', ['id' => $lapangan->id]) }}" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
          {{ $lapangan->created_at->format('m/d/Y') }}
          <a href="#">Tarif Rp.{{ $lapangan->tarif }} / Jam</a>
        </div>
      </div>
      @endforeach
      @endif
      {{ $field->links() }}
    </div>
    <div class="col-md-4">
      <div class="card my-4 position-fixed">
      <h5 class="card-header">Top Users</h5>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Followers</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Nama</td>
              <td>2001</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
