@extends('layouts.customer')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <h3 class="mt-4">{{ $field[0]->nama }}</h3>
      <p class="lead">
        Nama Mitra :
        @foreach($vendor as $mitra)
        <a href="#">{{ $mitra->nama }}</a>
        @endforeach
      </p>
      <hr>
      <p>Dipublikasikan Pada {{ $field[0]->created_at->format('m/d/Y') }}</p>
      <hr>
      <img class="img-fluid rounded wow bounce" src="https://lapanganfutsal.id/wp-content/uploads/2017/08/qs-lapangan-futsal-medan-a.png" alt="">

      <hr>
      <blockquote class="blockquote">
        <footer class="blockquote-footer">
        @foreach($vendor as $mitra)
          <i class="fas fa-map-marker-alt"></i> <cite title="Source Title">{{ $mitra->kota }}</cite><br>
          <cite title="Source Title">{{ $mitra->alamat }}</cite>
          @endforeach
        </footer>
      </blockquote>

      <hr>

      <h3 class="mt-4 mb-4">Review :</h3>
    <div class="media mb-4 mt-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
          <h5 class="mt-0">DWWD</h5>
          WDIWNDIWNDIWNDIW
        </div>
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
  <!-- /.row -->

</div>
@endsection