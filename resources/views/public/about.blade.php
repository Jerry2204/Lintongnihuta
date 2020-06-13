<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/asset/css/style.css">
    <link rel="stylesheet" href="/asset/css/bootstrap.css">
    <link rel="stylesheet" href="/asset/fontawesome/css/all.css">
    <link rel="stylesheet" href="/asset/css/informasi.css">
    <link rel="stylesheet" href="/asset/css/proyek.css">
</head>
<body>
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
                <li class="nav-item">
                    <a class="nav-link" href="/gallery"><i class="fas fa-images"></i> Gallery</a>
                </li>
                <li class="nav-item active font-weight-bold">
                    <a class="nav-link" href="/about"><i class="fas fa-users"></i> About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login"><i class="fas fa-sign-in-alt"></i> Login</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>

    <section>
        <div class="container">
            <h1 class="heading">Our Team</h1>
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
            </div>
        </div>
    </section>

    {{-- Javascript --}}
    <script src="/asset/javascript/jquery-3.1.1.min.js"></script>
    <script src="/asset/js/bootstrap.js"></script>
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
</body>
</html>
