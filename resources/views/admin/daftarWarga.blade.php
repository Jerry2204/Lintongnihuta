@extends('adminlayout.main')

@section('title', 'Daftar Akun Warga')

@section('container')
    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3 p-5">
                    <h2 class="text-center">Tambah Akun Warga</h2>
                    @if(session('sukses'))
                        <div class="alert alert-success">{{ session('sukses') }}</div>
                    @endif
                    <form action="/warga/add" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                        <div class="form-group">
                            <label for="nama_warga">Nama</label>
                            <input type="text" name="nama_warga" id="nama_warga" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="NIK">NIK</label>
                            <input type="text" name="NIK" id="NIK" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>

                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
