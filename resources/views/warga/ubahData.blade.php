@extends('adminlayout.main')

@section('title', 'Form Ubah Data Warga')

@section('container')

    <div class="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2 class="text-center">Ubah Data Warga</h2>
                            @if(session('sukses'))
                            <div class="alert alert-success">Data Berhasil diubah</div>
                            @endif
                            <form action="/biodataWarga/{{ $warga->id }}/update" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                  <label for="nama_warga">Nama</label>
                                  <input type="text" name="nama_warga" id="nama_warga" class="form-control {{ $errors->has('nama_warga') ? 'is-invalid' : '' }}" placeholder="Masukkan Nama.." value="{{ $warga->nama_warga }}">
                                  @if($errors->has('nama_warga'))
                                  <div class="invalid-feedback">
                                      Nama Harus diisi
                                  </div>
                                  @endif
                                </div>
                                <div class="form-group">
                                  <label for="NIK">NIK</label>
                                  <input type="text" name="NIK" autocomplete="off" id="NIK" class="form-control {{ $errors->has('NIK') ? 'is-invalid' : '' }}" placeholder="Masukkan NIK.." value="{{ $warga->NIK }}">
                                  @if($errors->has('NIK'))
                                  <div class="invalid-feedback">
                                      {{ $errors->first('NIK') }}
                                  </div>
                                  @endif
                                </div>
                                <div class="form-group">
                                  <label for="alamat">Alamat</label>
                                  <textarea class="form-control {{ $errors->has('alamat')? 'is-invalid' : ''  }}" name="alamat" id="alamat" rows="7" placeholder="Masukkan Alamat..">{{ $warga->alamat }}</textarea>
                                  <div class="invalid-feedback">
                                      Alamat Harus diisi
                                  </div>
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select class="form-control {{ $errors->has('agama') ? 'is-invalid' : '' }}" name="agama" id="agama">
                                      <option value="">-- Pilih Agama --</option>
                                      <option @if($warga->biodata_warga->agama == 'Protestan') {{ 'selected' }} @endif value="Protestan">Protestan</option>
                                      <option @if($warga->biodata_warga->agama == 'Katholik') {{ 'selected' }} @endif value="Katholik">Katholik</option>
                                      <option @if($warga->biodata_warga->agama == 'Islam') {{ 'selected' }} @endif value="Islam">Islam</option>
                                      <option @if($warga->biodata_warga->agama == 'Hindu') {{ 'selected' }} @endif value="Hindu">Hindu</option>
                                      <option @if($warga->biodata_warga->agama == 'Buddha') {{ 'selected' }} @endif value="Buddha">Buddha</option>
                                      <option @if($warga->biodata_warga->agama == 'Kong hu cu') {{ 'selected' }} @endif value="Kong hu cu">Kong hu cu</option>
                                    </select>
                                      @if($errors->has('agama'))
                                      <div class="invalid-feedback">Agama harus diisi</div>
                                      @endif
                                  </div>
                                  <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                      <option>-- Pilih Jenis Kelamin --</option>
                                      <option @if($warga->biodata_warga->jenis_kelamin == 'L') {{ 'selected' }} @endif value="L">Laki-laki</option>
                                      <option @if($warga->biodata_warga->jenis_kelamin == 'P') {{ 'selected' }} @endif value="P">Perempuan</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input value="{{ $warga->biodata_warga->tanggal_lahir }}" type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="" aria-describedby="helpId">
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
    </div>

@endsection
