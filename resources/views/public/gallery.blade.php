@extends('layout.main')

@section('title', 'Gallery')

@section('header')
    <link rel="stylesheet" href="/asset/css/gallery.css">
    <link rel="stylesheet" href="/asset/css/lightbox.min.css">
    <link rel="stylesheet" href="/asset/css/informasi.css">
    @endsection

    @section('container')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center heading-wisata">Gallery</h1>
            </div>
        </div>
        <div class="row mt-4 justify-content-center">
            @foreach ($informasi as $info)
            <div class="col-lg-3 col-md-4 img-gallery img-fluid mb-5 col-sm-6 col-10">
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
@endsection
