@extends('layout.main')

@section('title', 'All Wisata')

@section('header')
    <link rel="stylesheet" href="/asset/css/informasi.css">
@endsection

@section('container')

<nav class="navbar navbar-expand-lg fixed-top navbar-light" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/asset/images/singgolom.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
            Desa Lintong Nihuta
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active font-weight-bold">
                <a class="nav-link" href="/"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/penginapan"><i class="fas fa-hotel"></i> Penginapan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/gallery"><i class="fas fa-images"></i> Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about"><i class="fas fa-users"></i> About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login"><i class="fas fa-sign-in-alt"></i> Login</a>
            </li>
        </ul>
    </div>
</div>
</nav>


<div class="container mb-5" style="margin-top: 100px">
    <div class="row mb-5">
        <div class="col-lg-12">
            <h1 class="text-center heading-wisata">Informasi Wisata</h1>
        </div>
    </div>
    <div class="row">
        @foreach ($wisata as $wst)
        <div class="col-lg-4 col-md-6">
            <div class="card mb-4 d-block mx-auto" style="width: 18rem;">
                <img src="/asset/images/{{ $wst->gambar_info }}" height="200" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{ $wst->judul_info }}</h5>
                <p class="card-text">{!! substr($wst->isi_info, 0, 100) !!} ...</p>
                <a href="/single_berita/{{ $wst->id_informasi }}" class="teks-info float-right">Lihat selengkapnya</a>
                <div style="clear: both"></div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
    @endsection

    @section('footer')
        <script>
    $(document).ready(function(){
        $(window).scroll(function(){
            var wintop = $(window).scrollTop();
            if(wintop > 150){
                $('nav').addClass('bg-dark');
                $('nav a').addClass('text-white');
            }
            else{
                $('nav').removeClass('bg-dark');
                $('nav a').removeClass('text-white');
            }
        });

    });
        </script>

    @endsection
