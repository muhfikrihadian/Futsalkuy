@extends('layouts.mitra')

@section('content')

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{ route('mitra.tambahLapanganProses') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Tambah Lapanganmu</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            @foreach($id as $idm)
                                            <input type="hidden" value="{{ $idm->id }}" class="form-control" name="id_mitra" id="iuser">
                                            @endforeach
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama Lapangan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nama" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Foto Lapangan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="photo" class="form-control-file" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tarif Perjam</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="text-input" placeholder="100000" name="tarif" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Tipe Lapangan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="tipe" id="select" class="form-control" required>
                                                        <option value="Futsal">Futsal</option>
                                                        <option value="Tennis">Tennis</option>
                                                        <option value="Basket">Basket</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection