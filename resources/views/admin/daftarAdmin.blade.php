@extends('adminlayout.main')

@section('title', 'Tambah Admin')

@section('container')
    <div class="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2>Tambah Admin</h2>
                        </div>
                        @if(session('sukses'))
                            <div class="alert alert-success">{{ session('sukses') }}</div>
                        @endif
                        <form action="/daftarAdmin/add" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label for="nama_admin">Nama</label>
                              <input type="text" name="nama_admin" id="nama_admin" class="form-control {{ $errors->has('nama_admin') ? 'is-invalid' : '' }}" placeholder="Masukkan Nama" aria-describedby="helpId">
                              @if($errors->has('nama_admin'))
                                <div class="invalid-feedback">Nama Harus Diisi</div>
                              @endif
                            </div>
                            <div class="form-group">
                              <label for="jenis_kelamin">Jenis Kelamin</label>
                              <select class="form-control {{ $errors->has('jenis_kelamin') ? 'is-invalid' : '' }}" name="jenis_kelamin" id="jenis_kelamin">
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                              </select>
                              @if($errors->has('jenis_kelamin'))
                                <div class="invalid-feedback">Jenis Kelamin Harus Diisi</div>
                              @endif
                            </div>
                            <div class="form-group">
                              <label for="alamat">Alamat</label>
                              <textarea class="form-control {{ $errors->has('alamat') ? 'is-invalid' : '' }}" name="alamat" id="alamat" rows="5" placeholder="Masukkan Alamat"></textarea>
                              @if($errors->has('alamat'))
                              <div class="invalid-feedback">Alamat Harus Diisi</div>
                                @endif
                            </div>
                            <div class="form-group">
                              <label for="tanggal_lahir">Tanggal Lahir</label>
                              <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control {{ $errors->has('tanggal_lahir') ? 'is-invalid' : '' }}" placeholder="" aria-describedby="helpId">
                              @if($errors->has('tanggal_lahir'))
                              <div class="invalid-feedback">Tanggal Lahir Harus Diisi</div>
                                @endif
                            </div>
                            <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" name="username" id="username" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}" placeholder="Masukkan Username" aria-describedby="helpId">
                              @if($errors->has('username'))
                              <div class="invalid-feedback">Username Harus Diisi</div>
                            @endif
                            </div>
                            <div class="form-group">
                              <label for="password">Password</label>
                              <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" id="password" placeholder="Masukkan Password">
                              @if($errors->has('password'))
                              <div class="invalid-feedback">Password Harus Diisi</div>
                            @endif
                            </div>
                            <div class="form-group">
                              <label for="foto">Foto</label>
                              <input type="file" class="form-control {{ $errors->has('foto') ? 'is-invalid' : '' }}" name="foto" id="foto" aria-describedby="fileHelpId">
                              @if($errors->has('foto'))
                              <div class="invalid-feedback">Foto Harus Diisi</div>
                            @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Admin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
