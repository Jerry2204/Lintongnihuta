@extends('layout.main')

@section('title', 'Single Post')

@section('header')
    <link rel="stylesheet" href="/asset/css/carousel.css">
    <link rel="stylesheet" href="/asset/css/lightbox.min.css">
    <link rel="stylesheet" href="/asset/css/informasi.css">
    <link rel="stylesheet" href="/package/css/swiper.css">
    <style>
        nav{
            background: transparent;
            transition: .6s;
        }
        .bg-dark{
            padding: 20px 10px;
        }
        .main_search{
            width: 300px;
            height: 40px;
            background: none;
            outline: none;
            border: none;
            border-bottom: solid;
            font-size: 20px;
        }
        .main_search::placeholder{
            color: black;
            font-size: 20px;
        }
        .fa-search{
            font-size: 25px;
            color: black;
        }
        .height-nav{
            height: 80px;
        }
        .hr-comment{
            height: 2px;
            background-color: red;
        }

    body {
      background: #fff;
      letter-spacing: 1px;
      font-size: 15px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background: #122436;
      background-size: cover;
      border-radius: 10px;
      width: 300px;
      height: 380px;

    }
    .swiper-slide .imgBx{
        width: 100%;
        height: 270px;
        overflow: hidden;
    }
    .swiper-slide .imgBx img{
        width: 100%;
        height: 100%;
    }
    .swiper-slide .details{
        box-sizing: border-box;
        font-size: 20px;
        padding: 20px;
        height: 10%;
    }
    .swiper-slide .details h3{
        margin: 0;
        font-family: 'sans-serif';
        padding: 0;
        color: white;
        font-size: 18px;
        text-align: center;
        line-height: 20px;
    }
    .swiper-slide .details span{
        font-size: 16px;
        font-style: italic;
        color: #f44336;
    }
    </style>
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
            <li class="nav-item active">
                <a class="nav-link" href="/"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/penginapan"><i class="fas fa-hotel"></i> Penginapan</a>
            </li>
            <li class="nav-item active">
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

<div class="container" style="margin-top: 80px; margin-bottom: 70px; margin-top: 150px;">
    <div class="row">
        <div class="col-lg-6 col-md-5">
            <h3>{{ $berita->judul_info }}</h3>
            <small class="float-right">{{ $berita->updated_at->format('D, d/M/Y') }}</small>
            <div style="clear: both"></div>
            <hr>
            <p>{!! $berita->isi_info !!}</p>
        </div>
        <div class="col-lg-6 col-md-7">
            <img class="single-image" src="/asset/images/{{ $berita->gambar_info }}" alt="404" width="100%">
        </div>
    </div>
</div>

@endsection
@section('footer')
<script src="/asset/js/lightbox-plus-jquery.min.js"></script>
<script src="/asset/js/lightbox.js"></script>
<script src="/package/js/swiper.js"></script>
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
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
});


</script>
@endsection
