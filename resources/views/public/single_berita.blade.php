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


<div class="container" style="margin-top: 80px; margin-bottom: 70px; margin-top: 150px;">
    <div class="row">
        <div class="col-md-6">
            <h3 class="bold poppins">{{ $berita->judul_info }}</h3>
            <div style="clear: both"></div>
            <hr>
            <p>{!! $berita->isi_info !!}</p>
            <div class="my-3">
                <small class="info-posting">Diposting pada <b>{{ $berita->updated_at->format('d F Y') }}</b> | oleh <b>{{ $berita->admin->nama_admin }} </b> <br> Kategori: <b>{{ $berita->category->nama_kategori }}</b></small>
            </div>
            <div class="button-group">
                {{-- <button class="btn btn-sm btn-dark"><i class="fas fa-thumbs-up"></i> Suka</button> --}}
                <button class="btn btn-sm btn-dark" id="btn-komentar"><i class="fas fa-comment"></i> Komentar</button>
                @if (session('sukses'))
                <div class="alert alert-success">{{ session('sukses') }}</div>
                @endif
            </div>
            <div class="my-3">
                <form id="komentar" style="display: none" action="/komentar/{{ $berita->id_informasi }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Anda">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" placeholder="Masukkan Alamat Anda" class="form-control" id="alamat" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="komentar">Komentar</label>
                        <textarea name="komentar" placeholder="Masukkan Komentar Anda" class="form-control" id="komentar" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Kirim komentar</button>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <img class="single-image" src="/asset/images/{{ $berita->gambar_info }}" alt="404" width="100%" height="400px">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <h2 class="poppins bold">Daftar Komentar</h2>
            <div class="divider"></div>
            @foreach ($komentar as $comment)
                <img src="/assets/images/users/1.JPG" class="rounded-circle" width="50" alt="sadahsdk">
                <b class="my-3 poppins">{{ $comment->nama }}</b>
                <p class="mt-3">{{ $comment->komentar }}</p>
                <small class="poppins">{{ $comment->updated_at->diffForHumans() }}</small>
                <b class="d-block mt-3 poppins">Balasan:</b>
                @foreach ($comment->balasan_komentar as $balasan)
                    <p class="d-inline">{{ $balasan->isi_balasan }}</p>
                    <small class="float-right poppins">{{ $balasan->updated_at->diffForHumans() }}</small>
                @endforeach
                <hr>
            @endforeach
        </div>
        <div class="col-md-6">
            <h2 class="poppins bold">Kategori</h2>
            <div class="divider"></div>
            <div class="list-group">
                @foreach ($kategori as $category)
                    <a href="/allInformasi/{{ $category->id }}" class="poppins kategori-hover list-group-item list-group-item-action">{{ $category->nama_kategori }}</a>
                @endforeach
            </div>
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
        $('#btn-komentar').click(function(){
            $('#komentar').toggle('slideInDown');
        })
    });
</script>
@endsection
