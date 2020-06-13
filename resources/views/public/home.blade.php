@extends('layout.main')

@section('title', 'Home')

@section('header')
    <link rel="stylesheet" href="/asset/css/lightbox.min.css">
    <link rel="stylesheet" href="/asset/css/informasi.css">
    <link rel="stylesheet" href="/package/css/swiper.css">

    <style>
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

<div class="container-fluid">
<div class="row">
    <div class="col-lg-12 jumbotron-header">
        <div class="header-info">
            <span class="text1">Welcome to</span>
            <span class="text2">Desa Lintong Nihuta</span>
        </div>
    </div>
</div>
</div>
{{-- <div id="carouselId" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="/asset/images/danau.jpeg" width="100%" alt="First slide">
            <div class="carousel-caption d-md-block">
                <form action="/" method="get">
                    <input type="text" class="main_search" name="cari" placeholder="Cari"><i class="fas fa-search"></i>
                    <span class="text1">Welcome to</span>
                    <span class="text2">Desa Lintong Nihuta</span>
                </form>
                <h3>Desa Lintong Nihuta <i class="fa fa-camera"></i></h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores, magnam consectetur eos officia
                    dicta vel, quis eum illum non saepe, debitis minima eius facilis fuga ipsum! Voluptates
                    consequuntur quis est.</p>
                <div class="col-md-4 offset-md-4">
                    <input type="text" class="form-control d-inline-block" placeholder="Cari..">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1" d="M0,160L48,154.7C96,149,192,139,288,160C384,181,480,235,576,250.7C672,267,768,245,864,224C960,203,1056,181,1152,176C1248,171,1344,181,1392,186.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>

<div class="container mt-4">
    @foreach ($wisata as $info)
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-7 col-10">
            <h1 class="teks-info">{{ $info->judul_info }}</h1>
            <div class="divider"></div>
            {!! substr($info->isi_info, 0, 350) !!} <a href="/single_berita/{{ $info->id_informasi }}">Readmore &rarr;</a>
        </div>
        <div class="col-lg-4 col-md-5 p-3 col-10 informasi">
            <a href="/asset/images/{{ $info->gambar_info }}" data-title="{{ $info->judul_info }}" data-lightbox = "mygallery"><img src="/asset/images/{{ $info->gambar_info }}" class="gambar_info d-block img-fluid shadow mb-4" height="500px" alt="404"></a>
            <small class="teks-info font-weight-bold">{{ $info->created_at->format('D, d M Y') }} <span><i class="fas fa-calendar-alt"></i></span></small>
            <small class="teks-info font-weight-bold float-right">{{ $info->kategori }}</small>
        </div>
    </div>
    <hr>
    @endforeach
    <a href="/informasi/allWisata" class="teks-info float-right mb-5 link-wisata" style="text-decoration: none">Lihat Semua Informasi {{ $info->kategori }} <i class="fas fa-arrow-right"></i></a>
    <div style="clear: both"></div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center teks-info">- Berita -</h3>
            <hr class="hr-comment" width="100px">
             <!-- Swiper -->
             <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($berita as $news)
                  <div class="swiper-slide" >
                      <div class="imgBx">
                          <img class="img-thumbnail" src="/asset/images/{{ $news->gambar_info }}" alt="" srcset="">
                      </div>
                      <div class="details">
                          <h3>{{ $news->judul_info }} <br><span> <a href="/single_berita/{{ $news->id_informasi }}" style="color: red; font-weight: bold">Read More</a></span></h3>
                      </div>
                  </div>
                  @endforeach
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
        </div>
    </div>
</div>

<div class="container my-4">
    <div class="row">
        <div class="col-lg-10 offset-lg-1 col-md-12 shadow p-5" style="border-radius: 20px;">
            <h1 class="text-center teks-info">Komentar</h1>
            <hr width="100px" class="hr-comment">
            @if(session('sukses'))
            <div class="alert alert-success">{{ session('sukses') }}</div>
            @endif
            <form action="/komentar" method="post" class="mt-4">
                @csrf
                <div class="form-group mt-4">
                    <label for="nama">Nama</label>
                    <input type="text" value="{{ old('nama') }}" name="nama" id="nama" class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" placeholder="" aria-describedby="helpId">
                    @if($errors->has('nama'))
                    <div class="invalid-feedback">Nama harus diisi</div>
                    @endif
                </div>
                <div class="form-group mt-4 has-error">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control {{ $errors->has('alamat') ? 'is-invalid' : '' }}" name="alamat" id="alamat" rows="5">{{ old('alamat') }}</textarea>
                    @if($errors->has('alamat'))
                    <div class="invalid-feedback">Alamat harus diisi</div>
                    @endif
                </div>
                <div class="form-group mt-4">
                    <label for="komentar">Komentar</label>
                    <textarea class="form-control {{ $errors->has('komentar') ? 'is-invalid' : '' }}" name="komentar" id="komentar" rows="10">{{ old('komentar') }}</textarea>
                    @if($errors->has('komentar'))
                    <div class="invalid-feedback">Komentar harus diisi</div>
                    @endif
                </div>
                <button class="btn btn-outline-primary btn-block font-weight-bold text-uppercase" type="submit">Kirim Komentar</button>
            </form>
        </div>
    </div>
</div>
<hr>
<div class="container my-4">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center teks-info">Daftar Komentar</h3>
            <hr width="100px" class="hr-comment mb-5">
        </div>
    </div>
        <div class="row">
            <div class="col-lg-6">
                <p class="font-weight-bold">Komentar Pengunjung</p>
                @foreach ($komentar as $comment)
                <h6 class="my-3">{{ $comment->nama }}</h6>
                <p>{{ $comment->komentar }}</p>
                {{-- <p>{{ $comment->balasan_komentar }}</p> --}}
                <small>{{ $comment->updated_at->diffForHumans() }}</small>
                <b class="d-block mt-3">Balasan:</b>
                @foreach ($comment->balasan_komentar as $balasan)
                <p>{{ $balasan->isi_balasan }}</p>
                <small>{{ $balasan->updated_at->diffForHumans() }}</small>
                @endforeach
                <hr>
            @endforeach
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
