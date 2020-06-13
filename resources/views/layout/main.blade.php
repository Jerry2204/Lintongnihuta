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

@yield('container')

<footer>
    <div class="container p-3 pt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 div-footer">
                <h5 class="teks-info font-weight-bold">Desa Lintong Nihuta</h5>
                <div class="divider-footer"></div>
                <p class="teks-info">Ini merupakan website yang menyediakan informasi seputar wisata Desa Lintong Nihuta</p>
            </div>
            <div class="col-lg-3 div-footer">
                <h5 class="teks-info font-weight-bold">Kontak Kami</h5>
                <div class="divider-footer"></div>
                <p class="teks-info"><i class="fas fa-phone"></i> +6282276858074</p>
            </div>
            <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15946.005507766498!2d99.01203721935416!3d2.336469912711451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e04b6dbeff77f%3A0x76c79b4904edc93d!2sLintong%20Nihuta%2C%20Tampahan%2C%20Kabupaten%20Toba%20Samosir%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1587923737165!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <hr style="border: 1px solid white">
        <p class="text-center teks-info text-copyright">Copyrights &copy; {{ date('Y') }} | Group 4 D IV Software Engineering Technology | Del Institut of Technology</p>
    </div>
</footer>
<script src="/asset/javascript/jquery-3.1.1.min.js"></script>
<script src="/asset/js/bootstrap.js"></script>
@yield('footer')
</body>
</html>
