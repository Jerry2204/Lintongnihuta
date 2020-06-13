<!DOCTYPE html>
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
</html>
