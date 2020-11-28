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

    .swiper-slide a{
        font-weight: bold;
        font-size: 12px;
        color: #53A8FC
    }

    </style>
@endsection

@section('container')
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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 info-panel">
            <div class="row">
                <div class="col-lg">
                    <img src="/asset/images/cari.png" width="150" alt="" class="float-left">
                    <a href="" class="link-panel d-block" data-toggle="modal" data-target="#exampleModal">Cari Informasi</a>
                </div>
                <div class="col-lg">
                    <img src="/asset/images/Logo trans.png" width="150" alt="" class="float-left">
                    <a href="/about" class="link-panel d-block">Profil Desa</a>
                    {{-- <h4>Setting</h4>
                    <p>lorem ipsum dolor sit amet.</p> --}}
                </div>
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

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-9 col-md-9">
            <h2 class="poppins mt-5 bold">Destinasi Wisata</h2>
            <div class="divider"></div>
            <div class="row">
            @foreach ($wisata as $info)
            <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                <div class="card" style="width: 100%;">
                    <img src="/asset/images/{{ $info->gambar_info }}" height="150"  class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="poppins">{{ $info->judul_info }}</h5>
                        <div class="divider"></div>
                        {{-- <p class="card-text">{!! substr($info->isi_info, 0, 80) !!} ...</p> --}}
                        <p class="card-text">{!! Str::words($info->isi_info, 10) !!}</p>
                        <hr>
                        <a href="/single_berita/{{ $info->id_informasi }}" class="poppins d-block btn btn-primary">Lihat selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
            <div class="row mt-2">
                <div class="col-lg-12">
                    <a href="/allInformasi/{{ $info->category->id }}" class="teks-info link-wisata" style="text-decoration: none">Lihat Semua Informasi {{ $info->category->nama_kategori }} <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3">
            <h2 class="poppins mt-5 bold">Kategori</h2>
            <div class="divider"></div>
            <div class="list-group">
                @foreach ($kategori as $category)
                    <a href="/allInformasi/{{ $category->id }}" class="list-group-item list-group-item-action poppins kategori-hover">{{ $category->nama_kategori }}</a>
                @endforeach
              </div>
        </div>
    </div>
</div>
{{-- <div class="container mt-4">
    <h1 class="heading-wisata mt-5">Informasi Wisata</h1>
    <hr>
    @foreach ($wisata as $info)
    <div class="row mt-5 justify-content-center">
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
</div> --}}

<div class="container mt-5">
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="heading-wisata">Postingan Terbaru</h1>
            {{-- <h3 class="text-center teks-info">Berita</h3> --}}
            {{-- <hr class="hr-comment" width="100px"> --}}
             <!-- Swiper -->
             <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($berita_terbaru as $news)
                  <div class="swiper-slide" >
                      <div class="imgBx">
                          <img class="img-thumbnail" src="/asset/images/{{ $news->gambar_info }}" alt="" srcset="">
                      </div>
                      <div class="details">
                          <h3>{{ $news->judul_info }} <br><span> <a href="/single_berita/{{ $news->id_informasi }}" class="poppins">lihat selengkapnya <i class="fas fa-arrow-right"></i></a></span></h3>
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

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
            <form action="/informasi/cari" method="get">
                @csrf
                <div class="form-group">
                    <input type="text" name="cari" id="cari" class="form-control" placeholder="Masukkan Kata kunci">
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>
      </div>
    </div>
  </div>

{{-- <div class="container my-4">
    <div class="row">
        <div class="col-lg-10 offset-lg-1 col-md-12 shadow p-5" style="border-radius: 20px;">
            <h1 class="heading-wisata">Komentar</h1>
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
<hr> --}}
{{-- <div class="container my-4">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="heading-wisata">Daftar Komentar</h1>
        </div>
    </div>
        <div class="row">
            <div class="col-lg-6">
                <p class="font-weight-bold">Komentar Pengunjung</p>
                @foreach ($komentar as $comment)
                <h6 class="my-3">{{ $comment->nama }}</h6>
                <p>{{ $comment->komentar }}</p>
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
    </div> --}}
    @endsection
@section('footer')
<script src="/asset/js/lightbox-plus-jquery.min.js"></script>
<script src="/asset/js/lightbox.js"></script>
<script src="/package/js/swiper.js"></script>
    <script>
    $(document).ready(function(){
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
