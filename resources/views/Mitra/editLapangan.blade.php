@extends('layouts.mitra')

@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('mitra.tambahJam') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card">
                            <div class="card-header">
                                <strong>Tentukan Jam Operasi Lapanganmu</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @foreach($id as $idm)
                                    <input type="hidden" value="{{ $idm->id }}" class="form-control" name="id_lapangan" id="iuser">
                                    @endforeach
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="select" class=" form-control-label">Jam Operasi</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="jam" id="select" class="form-control" required>
                                                <option value="00.00">00.00</option>
                                                <option value="01.00">01.00</option>
                                                <option value="02.00">02.00</option>
                                                <option value="03.00">03.00</option>
                                                <option value="04.00">04.00</option>
                                                <option value="05.00">05.00</option>
                                                <option value="06.00">06.00</option>
                                                <option value="07.00">07.00</option>
                                                <option value="08.00">08.00</option>
                                                <option value="09.00">09.00</option>
                                                <option value="10.00">10.00</option>
                                                <option value="11.00">11.00</option>
                                                <option value="12.00">12.00</option>
                                                <option value="13.00">13.00</option>
                                                <option value="14.00">14.00</option>
                                                <option value="15.00">15.00</option>
                                                <option value="16.00">16.00</option>
                                                <option value="17.00">17.00</option>
                                                <option value="18.00">18.00</option>
                                                <option value="19.00">19.00</option>
                                                <option value="20.00">20.00</option>
                                                <option value="21.00">21.00</option>
                                                <option value="22.00">22.00</option>
                                                <option value="23.00">23.00</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Tambah
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-12">
                    <form action="{{ route('mitra.tambahLapanganProses') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card">
                            <div class="card-header">
                                <strong>Tambah Foto-foto Lapanganmu</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @foreach($id as $idm)
                                    <input type="hidden" value="{{ $idm->id }}" class="form-control" name="id_lapangan" id="iuser">
                                    @endforeach
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="select" class=" form-control-label">File Foto</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="file-input" name="photo" class="form-control-file" required>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Tambah
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