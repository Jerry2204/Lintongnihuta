@extends('layout.main')

@section('title', 'Gallery')

@section('header')
    <link rel="stylesheet" href="/asset/css/gallery.css">
    <link rel="stylesheet" href="/asset/css/lightbox.min.css">
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
                <li class="nav-item">
                    <a class="nav-link" href="/"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/penginapan"><i class="fas fa-hotel"></i> Penginapan</a>
                </li>
                <li class="nav-item active font-weight-bold">
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

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center heading-wisata">Gallery</h1>
            </div>
        </div>
        <div class="row mt-4 justify-content-center">
            @foreach ($informasi as $info)
            <div class="col-lg-3 col-md-4 img-gallery mb-5 col-sm-6 col-10">
                <a href="/asset/images/{{ $info->gambar_info }}" data-title="{{ $info->judul_info }}" data-lightbox="roadtrip">
                    <img class="mb-3" src="/asset/images/{{ $info->gambar_info }}" alt="">
                </a>
            </div>
            @endforeach
        </div>
    </div>

    @endsection
    @section('footer')
    <script src="/asset/js/lightbox-plus-jquery.min.js"></script>
    <script src="/asset/js/lightbox.js"></script>
    <script src="/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Custom JavaScript -->
    <script src="/dist/js/custom.min.js"></script>
    <script>
    $(document).ready(function(){
    $(window).scroll(function(){
        var wintop = $(window).scrollTop();
        if(wintop > 150){
            $('nav').addClass('bg-light');
        }
        else{
            $('nav').removeClass('bg-light');
        }
    });
});


</script>

@endsection
