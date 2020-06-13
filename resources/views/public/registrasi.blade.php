<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/asset/css/registrasi.css">
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <h1>Registrasi Admin</h1>
            <form action="/daftarAdmin/add" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <label for="nama_admin">Nama</label>
                    <input type="text" name="nama_admin" id="nama_admin" autocomplete="off">
                </div>
                <div class="input-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
                </div>
                <div class="input-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir">
                </div>
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="input-group">
                    <label for="foto">Foto</label>
                    <input class="form-control-file" type="file" name="foto" id="foto">
                </div>
                <button class="btn" type="submit">Registrasi</button>
            </form>
        </div>
    </div>
</body>
</html>


