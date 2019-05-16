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

      <button type="button" class="mt-4 mb-4 btn btn-lg btn-primary" data-toggle="modal" data-target="#modalBooking">
      Booking
      </button>

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
      <h3 class="mt-4 mb-4">Jam Operasi Lapangan :</h3>
      <div class="media mb-4 mt-4">
        <div class="media-body">
          @foreach($waktu as $jam)
          <button type="button" class="btn btn-sm btn-primary" disabled>{{ $jam->jam }}</button>
          @endforeach
        </div>
      </div>

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

      <div class="modal fade" id="modalBooking" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Booking Lapangan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ route('customer.booking') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
            <div class="modal-body">
              <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body card-block">
                                            <input type="hidden" value="{{ Auth::user()->name }}" class="form-control" name="nama_customer">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama Rekeningmu</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="narek" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nomor Rekeningmu</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" name="norek" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Bukti Transfer</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="bukti" class="form-control-file" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Pilih Jam</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="jam" id="select" class="form-control" required>
                                                    @foreach($free as $jam)
                                                        <option value="{{ $jam->jam }}">{{ $jam->jam }}</option>
                                                    @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                                @foreach($vendor as $mitra)
                                                <input type="hidden" value="{{ $mitra->nama }}" class="form-control" name="nama_mitra">
                                                @endforeach
                                                <input type="hidden" value="{{ $field[0]->id }}" class="form-control" name="id_lapangan">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Booking</button>
            </div>
            </form>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  @endsection