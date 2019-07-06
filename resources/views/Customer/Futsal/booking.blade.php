@extends('layouts.customer')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2 mt-4 bg-white" style="padding: 20px;">
      <p>Penting !, Metode pembayaran dalam SportQ untuk sementara dialihkan dengan transfer uang sejumlah Rp.55.000 ke Rekening : <br>Nama Rekening : Andri Julian <br> Nomor Rekening : 09382432</p>
      <h5>Tanggal : 20/09/2019</h5>
      <div class="row form-group" style="margin-top: 20px;">
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
          @foreach($jam as $free)
            <option value="{{ $free->jam }}">{{ $free->jam }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="row form-group">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Booking</button>
      </div>
    </div>
  </div>
</div>
@endsection
