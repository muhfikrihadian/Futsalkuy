@extends('layouts.mitra')

@section('content')

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="fas fa-print"></i>Cetak Laporan</button>
                                </div>
                            </div>
                        </div>
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
                                                <th>Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Muhammad Fikri Hadian</td>
                                                <td>Lapangan A</td>
                                                <td>13.00-14.00</td>
                                                <td>Muhammad Fikri hadian</td>
                                                <td>84293084329</td>
                                                <td>14 September 2001</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                            <div class="col-lg-12">
                                <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                        <h3 class="title-2 m-b-40">Bar chart</h3>
                                        <canvas id="barChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection