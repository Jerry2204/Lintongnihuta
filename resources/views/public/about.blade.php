@extends('layout.main')

@section('title', 'Tentang kami')

@section('header')
    <link rel="stylesheet" href="/asset/css/style.css">
    <link rel="stylesheet" href="/asset/css/bootstrap.css">
    <link rel="stylesheet" href="/asset/fontawesome/css/all.css">
    <link rel="stylesheet" href="/asset/css/informasi.css">
    <link rel="stylesheet" href="/asset/css/proyek.css">
    <style>
        .infoKades{
            font-family: 'Poppins';
            font-weight: 700;
            margin-top: 20px;
        }
    </style>
@endsection
@section('container')
    <section>
        <div class="container">
            <h1 class="heading">Desa Lintong Nihuta</h1>
            @foreach ($sejarah as $history)
            <p>
                {!! $history->sejarah !!}
            </p>
            @endforeach
            {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa sapiente eum neque odio nemo! Placeat tempore voluptas quibusdam quisquam, modi amet illo possimus sit debitis veniam quo repellat? Labore, impedit.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ut eveniet quasi nemo. Temporibus excepturi consequuntur quis repellat architecto aut provident facere nulla tempore alias consequatur accusamus, amet ut quisquam!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt excepturi dignissimos voluptatum provident fugit voluptatem. Voluptatem rerum neque explicabo architecto mollitia autem, blanditiis dicta vel. Sit assumenda cumque hic dolorum.
            </p> --}}
            <div class="col-md-8 offset-2">
                <img src="/asset/images/Logo Kami.PNG" width="100%" height="600px" alt="">
            </div>
            <hr>
            <h1 class="heading">Perangkat Desa</h1>
            <div class="row mt-5">
                <div class="col-md-4 offset-md-1 col-sm-6 col-6">
                    @foreach ($perangkat_desa as $kades)
                    <img src="/asset/images/{{ $kades->foto }}" width="100%" height="80%" alt="sajkdhash">
                    <h3 class="text-center infoKades">{{ $kades->nama }}</h3>
                    <p class="text-center">Kepala Desa Lintong Nihuta</p>
                </div>
                <div class="col-md-4 offset-md-1 col-sm-6 col-6">
                    <img src="/asset/images/{{ $kades->sekdes->foto_sekdes }}" width="100%" height="80%" alt="sajkdhash">
                    <h3 class="text-center infoKades">{{ $kades->sekdes->nama_sekdes }}</h3>
                    <p class="text-center">Sekretaris Desa Lintong Nihuta</p>
                    @endforeach
                </div>
            </div>
            {{-- <hr>
            <h1 class="heading">Pengembang Sistem Informasi</h1>
            <div class="card-wrapper">
                <div class="card">
                    <img src="/asset/images/Logo IT Del.png" alt="" class="card-img">
                    <img src="/asset/images/Jerry Andrianto Pangaribuan_DIV Teknologi Rekayasa Perangkat Lunak_Fakultas Informatika dan Teknik Elektro_11419046.jpg" alt="" class="profile-img">
                    <h1>Jerry Andrianto </h1>
                    <p class="job-title">Programmer</p>
                    <p class="about">
                    </p>
                    <a href="" class="btn">Contact</a>
                    <ul class="social-media">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="card">
                    <img src="/asset/images/Logo IT Del.png" alt="" class="card-img">
                    <img src="/asset/images/thumpak.jpeg" alt="" class="profile-img">
                    <h1>Thumpak Aritonang</h1>
                    <p class="job-title">-</p>
                    <p class="about">

                    </p>
                    <a href="" class="btn">Contact</a>
                    <ul class="social-media">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="card">
                    <img src="/asset/images/Logo IT Del.png" alt="" class="card-img">
                    <img src="/asset/images/edwin.jpeg" alt="" class="profile-img">
                    <h1>Edwin Damanik</h1>
                    <p class="job-title">Programmer</p>
                    <p class="about">

                    </p>
                    <a href="" class="btn">Contact</a>
                    <ul class="social-media">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="card">
                    <img src="/asset/images/Logo IT Del.png" alt="" class="card-img">
                    <img src="/asset/images/jovan.jpg" alt="" class="profile-img">
                    <h1>Jovan Sigalingging</h1>
                    <p class="job-title">Programmer</p>
                    <p class="about">

                    </p>
                    <a href="" class="btn">Contact</a>
                    <ul class="social-media">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="card">
                    <img src="/asset/images/Logo IT Del.png" alt="" class="card-img">
                    <img src="/asset/images/Michael.jpg" alt="" class="profile-img">
                    <h1>Michael Sinaga</h1>
                    <p class="job-title">Programmer</p>
                    <p class="about">
                    </p>
                    <a href="" class="btn">Contact</a>
                    <ul class="social-media">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </section>
@endsection
@section('footer')
    {{-- Javascript --}}
    <script src="/asset/javascript/jquery-3.1.1.min.js"></script>
    <script src="/asset/js/bootstrap.js"></script>
@endsection
