@extends('adminlayout.main')

@section('title', 'Admin')

@section('header')
    <style>
        .card{
            min-height: 0;
        }
        .wraper{
            min-height: 600px;
        }
        .jumlah_heading{
            color: white;
        }
    </style>
@endsection

@section('container')
    <div class="page-wrapper wraper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <h1 class="text-center dashboard-heading"><u>Sistem Informasi Desa Lintong Nihuta</u></h1>
                </div>
            </div>
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-6 col-xlg-6">
                    <div class="card">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white"><i class="fas fa-users"></i></h1>
                            <h5 class="jumlah_heading">Warga</h5>
                            <h6 class="text-white">{{ $jlh_warga }}</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-6 col-xlg-6">
                    <div class="card">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white"><i class="fas fa-users"></i></h1>
                            <h5 class="jumlah_heading">Admin</h5>
                            <h6 class="text-white">{{ $jlh_admin }}</h6>
                        </div>
                    </div>
                </div>
                 <!-- Column -->
                <div class="col-md-4 col-lg-4 col-xlg-4">
                    <div class="card">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white"><i class="fas fa-image"></i></h1>
                            <h5 class="jumlah_heading">Informasi Wisata</h5>
                            <h6 class="text-white">{{ $jlh_wisata }}</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4 col-lg-4 col-xlg-4">
                    <div class="card">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="fas fa-newspaper"></i></h1>
                            <h5 class="jumlah_heading">Berita</h5>
                            <h6 class="text-white">{{ $jlh_berita }}</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-4 col-lg-4 col-xlg-4">
                    <div class="card">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white"><i class="fas fa-hotel"></i></h1>
                            <h5 class="jumlah_heading">Penginapan</h5>
                            <h6 class="text-white">{{ $jlh_penginapan }}</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


