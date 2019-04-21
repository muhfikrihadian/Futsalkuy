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
                                                <th>Waktu</th>
                                                <th>Nama Rekening</th>
                                                <th>Nomor Rekening</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Muhammad Fikri Hadian</td>
                                                <td>Lapangan A</td>
                                                <td>13.00-14.00</td>
                                                <td>Muhammad Fikri hadian</td>
                                                <td>84293084329</td>
                                                <td>
                                                	<button type="button" class="btn btn-success btn-sm">
                                            <i class="fa fa-check"></i>&nbsp; Terima</button>
                                            <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fa fa-close"></i>&nbsp; Tolak</button>
                                                </td>
                                            </tr>
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