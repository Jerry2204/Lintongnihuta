@extends('adminlayout.main')

@section('title', 'Form Biodata')

@section('container')
    <div class="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2>Isi Biodata</h2>
                            @if(session('gagal'))
                            <div class="alert alert-danger">{{ session('gagal') }}</div>
                            @endif
                            @if(session('sukses'))
                            <div class="alert alert-danger">{{ session('sukses') }}</div>
                            @endif
                        </div>
                        <form action="/biodataWarga/{{ auth()->user()->warga->id }}/add" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label for="agama">Agama</label>
                              <select class="form-control {{ $errors->has('agama') ? 'is-invalid' : '' }}" name="agama" id="agama">
                                <option>-- Pilih Agama --</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Islam">Islam</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Kong hu cu">Kong hu cu</option>
                              </select>
                                @if($errors->has('agama'))
                                <div class="invalid-feedback">Agama harus diisi</div>
                                @endif
                            </div>
                            <div class="form-group">
                              <label for="jenis_kelamin">Jenis Kelamin</label>
                              <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                <option>-- Pilih Jenis Kelamin --</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="tanggal_lahir">Tanggal Lahir</label>
                              <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="foto">Foto</label>
                              <input type="file" class="form-control" name="foto" id="foto" placeholder="" aria-describedby="fileHelpId">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
