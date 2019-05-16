@extends('layouts.mitra')

@section('content')

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Lapangan</th>
                                                <th>Jam</th>
                                                <th>Nama Rekening</th>
                                                <th>Nomor Rekening</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($pemesanan as $booking)
                                            <tr>
                                                <td>{{ $booking->nama_customer }}</td>
                                                <td>{{ $booking->id_lapangan }}</td>
                                                <td>{{ $booking->jam }}</td>
                                                <td>{{ $booking->nama_rekening }}</td>
                                                <td>{{ $booking->nomor_rekening }}</td>
                                                <td>
                                <form action="{{ route('mitra.konfirmBooking') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                            <input type="hidden" value="{{ $booking->id }}" class="form-control" name="id_booking">
                                            <button type="submit" class="btn btn-success btn-sm">
                                            <i class="fa fa-check"></i>&nbsp; Terima</button>
                                </form>
                                            <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fa fa-close"></i>&nbsp; Tolak</button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection