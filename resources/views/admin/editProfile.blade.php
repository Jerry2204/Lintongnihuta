@extends('adminlayout.main')

@section('title', 'Edit Profile')

@section('container')
    <div class="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2 class="text-center">Ubah Profile Admin</h2>
                            @if(session('sukses'))
                            <div class="alert alert-success">{{ session('sukses') }}</div>
                            @endif
                            <form action="/admin_profile/{{ $admin->id }}/update" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mt-4">
                                  <label for="nama_admin">Nama</label>
                                  <input type="text" value="{{ $admin->nama_admin }}" name="nama_admin" id="nama_admin" class="form-control {{ $errors->has('nama_admin')? 'is-invalid' : '' }} " placeholder="Masukkan Nama Admin" aria-describedby="helpId">
                                @if($errors->has('nama_admin'))
                                    <div class="invalid-feedback">Nama Tidak Boleh Kosong</div>
                                @endif
                                </div>
                                <div class="form-group">
                                  <label for="jenis_kelamin">Jenis Kelamin</label>
                                  <select class="form-control {{ $errors->has('jenis_kelamin') ? 'is_invalid' : '' }}" name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="L" @if($admin->jenis_kelamin == 'L') {{ 'selected' }} @endif>Laki-laki</option>
                                    <option value="P" @if($admin->jenis_kelamin == 'P') {{ 'selected' }} @endif>Perempuan</option>
                                  </select>
                                  @if($errors->has('jenis_kelamin'))
                                  <div class="invalid-feedback">Jenis Kelamin Tidak Boleh Kosong</div>
                                  @endif
                                </div>
                                <div class="form-group">
                                  <label for="alamat">Alamat</label>
                                  <textarea class="form-control {{ $errors->has('alamat') ? 'is-invalid' : '' }}" name="alamat" id="alamat" rows="8" placeholder="Masukkan Alamat">{{ $admin->alamat }}</textarea>
                                @if($errors->has('alamat'))
                                    <div class="invalid-feedback">Alamat Tidak Boleh Kosong</div>
                                @endif
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" value="{{ $admin->tanggal_lahir }}" name="tanggal_lahir" id="tanggal_lahir" class="form-control {{ $errors->has('tanggal_lahir') ? 'is-invalid' : '' }}">
                                    @if($errors->has('tanggal_lahir'))
                                    <div class="invalid-feedback">Tanggal Lahir tidak boleh kosong</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                  <label for="foto">Foto</label>
                                  <input type="file" class="form-control" name="foto" id="foto">
                                </div>
                                <button type="submit" class="btn btn-cyan d-block mx-auto mt-4">Simpan Perubahan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
