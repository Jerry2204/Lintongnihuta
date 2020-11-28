@extends('layout.main')

@section('title', 'All Wisata')

@section('header')
    <link rel="stylesheet" href="/asset/css/informasi.css">
@endsection

@section('container')
<div class="container mb-5" style="margin-top: 100px">
    <div class="row mb-5">
        <div class="col-lg-12">
            <h1 class="text-center heading-wisata">Informasi terkait {{ $keyword }}</h1>
        </div>
    </div>
    <div class="row">
        @foreach ($wisata as $wst)
        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
            <div class="card mb-4 d-block mx-auto" style="width: 100%;">
                <img src="/asset/images/{{ $wst->gambar_info }}" height="200" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title poppins">{{ $wst->judul_info }}</h5>
                <div class="divider"></div>
                <p class="card-text">{!! substr($wst->isi_info, 0, 80) !!} ...</p>
                <hr>
                <a href="/single_berita/{{ $wst->id_informasi }}" class="d-block btn btn-primary">Lihat selengkapnya</a>
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
