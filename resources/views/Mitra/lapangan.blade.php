@extends('layouts.mitra')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <a class="au-btn au-btn-icon au-btn--blue" href="{{ route('mitra.tambahLapangan') }}" role="button"><i class="fas fa-plus"></i>Tambah Lapangan</a>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
            @foreach($lapangan as $data)
                <div class="card col-md-5 mr-3 ml-3" style="width: 18rem;">
                  <img src="{{ asset('images/Lapangan/'.$data->foto)}}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{ $data->nama }}</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Rp.{{ $data->tarif }} /Jam</li>
                        <li class="list-group-item">Rating : 7/10</li>
                    </ul>
                    <a href="#" class="btn btn-success">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
</div>

@endsection