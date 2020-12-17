<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/asset/css/bootstrap.css">
    <link rel="stylesheet" href="/asset/css/proyek.css">
    <link rel="stylesheet" href="/asset/fontawesome/css/all.css">
    @yield('header')
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/asset/images/logo trans.PNG" width="50" height="50" class="d-inline-block align-top" alt="">
              </a>
              <a href="/" class="navbar-brand">Desa Lintong Nihuta</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/"><i class="fas fa-home"></i> Beranda</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/penginapan"><i class="fas fa-hotel"></i> Penginapan</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="/about"><i class="fas fa-users"></i> Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gallery"><i class="fas fa-images"></i> Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login"><i class="fas fa-sign-in-alt"></i> Masuk</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <script>
        const currentLocation = location.href;
        const menuItem = document.querySelectorAll('a');
        const listItem = document.querySelectorAll('li');
        const menuLength = menuItem.length;
        console.log(menuLength);
        let i;
        for(i = 0; i < menuLength; i++){
            if(i == 0 || i == 1){
                menuItem[i].className = "navbar-brand";
            }else{
                if(menuItem[i].href == currentLocation){
                    menuItem[i].className = "nav-link active font-weight-bold";
                    console.log('halaman aktif');
                }
            }
        }
    </script>
@yield('container')

<footer>
    <div class="container p-3 pt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 div-footer">
                <h5 class="teks-info font-weight-bold">Desa Lintong Nihuta</h5>
                <div class="divider-footer"></div>
                <p class="teks-info text-justify font-weight-bold">Sistem Informasi Desa Pariwisata Lintong Nihuta ini bertujuan untuk memperkenalkan kepada banyak orang bahwa Desa Lintong Nihuta memiliki Pesona Wisata yang sangat menarik untuk dikunjungi.</p>
            </div>
            <div class="col-lg-3 div-footer">
                <h5 class="teks-info font-weight-bold">Link Terkait</h5>
                <div class="divider-footer"></div>
                <a class="teks-info d-block font-weight-bold mb-2 link_terkait target="_blank"" href="https://kemenparekraf.go.id/">Kementrian Pariwisata dan Ekonomi Kreatif</a>
                <a class="teks-info d-block font-weight-bold mb-2 link_terkait" target="_blank" href="https://www.sumutprov.go.id/">Pemerintah Provinsi Sumatera Utara</a>
                <a class="teks-info d-block font-weight-bold mb-2 link_terkait" target="_blank" href="http://www.tobasamosirkab.go.id/">Pemerintah Kabupaten Toba</a>
                <a class="teks-info d-block font-weight-bold mb-2 link_terkait" target="_blank" href="http://www.del.ac.id/">Institut Teknologi Del</a>
            </div>
            <div class="col-lg-6">
                <iframe style="border-radius: 20px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15946.005507766498!2d99.01203721935416!3d2.336469912711451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e04b6dbeff77f%3A0x76c79b4904edc93d!2sLintong%20Nihuta%2C%20Tampahan%2C%20Kabupaten%20Toba%20Samosir%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1587923737165!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <p class="text-center">
                    <img src="/asset/images/logo10.PNG" style="border-radius: 20px" width="100" alt="saa">
                </p>
            </div>
        </div>
        <p class="text-center teks-info text-copyright">Copyrights &copy; {{ date('Y') }} | Group 4 D IV Software Engineering Technology | Del Institut of Technology</p>
    </div>
</footer>
<script src="/asset/javascript/jquery-3.1.1.min.js"></script>
<script src="/asset/js/bootstrap.js"></script>
@yield('footer')
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
