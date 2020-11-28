@extends('adminlayout.main')

@section('title', 'Edit Perangkat Desa')

@section('container')
<div class="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2>Edit Perangkat Desa</h2>
                    </div>
                    <form action="/kades/{{ $kades->id }}/update" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5>Kepala Desa</h5>
                        <div class="form-group">
                            <label for="nama">Nama Kepala Desa</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Kepala Desa" value="{{ $kades->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{ $kades->tanggal_lahir }}">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin"></label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="L" {{ $kades->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ $kades->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="foto">Foto</label>
                          <input type="file" class="form-control-file" name="foto" id="foto">
                        </div>
                        <hr>
                        <h5>Sekretaris Desa</h5>
                        <div class="form-group">
                            <label for="nama_sekdes">Nama Sekretaris Desa</label>
                            <input type="text" class="form-control" name="nama_sekdes" id="nama_sekdes" placeholder="Masukkan Nama Sekretaris Desa" value="{{ $kades->sekdes->nama_sekdes }}">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir_sekdes">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir_sekdes" id="tanggal_lahir_sekdes" value="{{ $kades->sekdes->tanggal_lahir_sekdes }}">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin_sekdes"></label>
                            <select class="form-control" name="jenis_kelamin_sekdes" id="jenis_kelamin_sekdes">
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="L" {{ $kades->sekdes->jenis_kelamin_sekdes == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ $kades->sekdes->jenis_kelamin_sekdes == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="foto_sekdes">Foto</label>
                            <input type="file" class="form-control-file" name="foto_sekdes" id="foto_sekdes" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
