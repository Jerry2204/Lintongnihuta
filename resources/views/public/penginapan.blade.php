@extends('layout.main')

@section('title', 'Penginapan')

@section('header')
    <link rel="stylesheet" href="/asset/css/carousel.css">
    <link rel="stylesheet" href="/asset/css/informasi.css">
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
            <li class="nav-item">
                <a class="nav-link" href="/"><i class="fas fa-home"></i> Home</a>
            </li>
            <li class="nav-item active font-weight-bold">
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

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="/asset/images/undraw_quite_town_mg2q.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
        <img src="/asset/images/undraw_choosing_house_v37h.png" class="d-block w-100" alt="...">
    </div>
    @foreach ($penginapan as $gambar)
    <div class="carousel-item">
        <img src="/asset/images/{{ $gambar->gambar_info }}" class="d-block w-100" alt="...">
    </div>
    @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next"  href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<div class="container mt-5">
    @foreach ($penginapan as $info)
    <div class="row">
        <div class="col-lg-8 col-md-7">
            <h1>{{ $info->judul_info }}</h1>
            <div class="divider"></div>
            <p class="teks-info">{!! substr($info->isi_info, 0, 500) !!} ..... <a href="/single_berita/{{ $info->id_informasi }}">readmore &rarr;</a></p>
        </div>
        <div class="col-lg-4 col-md-5 p-3">
            <img src="/asset/images/{{ $info->gambar_info }}" class="gambar_info d-block img-fluid shadow mb-4" height="500px" alt="404">
            <small class="font-weight-bold teks-info">{{ $info->created_at->format('D, d M Y') }} <span><i class="fas fa-calendar-alt"></i></span></small>
            <small class="font-weight-bold float-right teks-info">{{ $info->kategori }}</small>
        </div>
    </div>
    <hr>
    @endforeach
    <a href="/informasi/allPenginapan" class="teks-info float-right mb-5 link-wisata" style="text-decoration: none">Lihat Semua Informasi {{ $info->kategori }}<i class="fas fa-arrow-right"></i></a>
    <div style="clear: both"></div>
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
    })
})


</script>
@endsection
