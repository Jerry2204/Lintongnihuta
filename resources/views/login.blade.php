{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/asset/fontawesome/css/all.css">
    <link rel="stylesheet" href="/asset/css/login.css">
</head>
<body>
    <form action="/login/process" method="post">
        @csrf
        <div class="login-box">
            <h1>LOGIN</h1>
            <div class="text-box">
                <i class="fas fa-user-alt"></i>
                <input type="text" name="username" id="username" placeholder="Masukkan Username">
            </div>
            <div class="text-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Masukkan password">
            </div>
            <b><i style="color: red; margin: auto; letter-spacing: 3px ">{{ session('gagal') }}</i></b>
            <button type="submit" name="login">Login</button>
        </div>
    </form>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login </title>
    <link rel="stylesheet" href="{{ asset('asset') }}/css/index.css">
    <link rel="stylesheet" href="{{ asset('asset') }}/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="form-login">
        <div class="teks-welcome">
            <span>Welcome</span><br><span>Good People</span>
        </div>
        <div class="grid-login">
            <form action="/login/process" method="POST">
                @csrf
                <div class="template-login">
                    <div class="judul-login"><span><h1>Login</h1></span></div>
                    <div class="akunlog">
                        <div class="username">
                            <p class="font-weight-bold">Username</p>
                            <i class="fa fa-user" aria-hidden="true"></i><input type="text" name="username" placeholder="Masukkan username">
                        </div>
                        <div class="password">
                            <p class="font-weight-bold">Password</p>
                            <i class="fa fa-key" aria-hidden="true"></i><input type="password" name="password" placeholder="Masukkan password">
                        </div>
                        <div class="tblLogin">
                            <button type="submit">LOGIN</button>
                            <a href="/" class="mt-3" type="submit">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
