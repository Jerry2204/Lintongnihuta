@extends('adminlayout.main')

@section('title', 'Admin')

@section('header')
<link rel="stylesheet" type="text/css" href="/assets/libs/quill/dist/quill.snow.css">
<style>
    .ck-editor__editable_inline {
    min-height: 300px;
}
</style>
@endsection

@section('container')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h2 class="page-title">Daftar Informasi</h2>
            </div>
        </div>
    </div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary my-2 float-right" data-toggle="modal" data-target="#exampleModal">
                Tambah Informasi
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if(session('sukses'))
            <div class="alert alert-success">{{ session('sukses') }}</div>
            @endif
            <table class="table table-hover" id="data-table">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Judul Informasi</th>
                        <th>Kategori</th>
                        <th width="600px">Isi Informasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($info as $informasi)
                    <tr>
                        <td style="width: 5%">{{ $loop->iteration }}</td>
                        <td style="width: 20%">{{ $informasi->judul_info }}</td>
                        <td style="width: 10%">{{ $informasi->kategori }}</td>
                        <td style="width: 50%">{{ $informasi->isi_info }}</td>
                        <td style="width: 15%">
                            <a href="/informasi/{{ $informasi->id_informasi }}/edit" class="btn btn-sm btn-primary">Ubah</a>
                            <a href="/informasi/{{ $informasi->id_informasi }}/delete" onclick="return confirm('Apakah anda yakin ingin menghapus data?');" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Informasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="/informasi/create" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="judul_info">Judul Informasi</label>
                    <input type="text" value="{{ old('judul_info') }}" name="judul_info" id="judul_info" class="form-control {{ $errors->has('judul_info') ? 'is-invalid' : '' }}" placeholder="" aria-describedby="helpId">
                    @if($errors->has('judul_info'))
                    <div class="invalid-feedback">Judul Informasi Harus Diisi</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select class="form-control {{ $errors->has('kategori') ? 'is-invalid' : '' }}" name="kategori" id="kategori">
                        <option value="">-- Pilih Kategori --</option>
                        <option value="wisata" {{ old('kategori') == 'wisata' ? 'selected' : '' }}>Wisata Alam</option>
                        <option value="penginapan" {{ old('kategori') == 'penginapan' ? 'selected' : '' }}>Penginapan</option>
                        <option value="berita" {{ old('kategori') == 'berita' ? 'selected' : '' }}>Berita</option>
                    </select>
                    @if($errors->has('kategori'))
                        <div class="invalid-feedback">Kategori Harus Diisi</div>
                    @endif
                </div>
                <div class="form-group">
                  <label for="isi_info">Isi Informasi</label>
                  <textarea class="form-control {{ $errors->has('isi_info') ? 'is-invalid' : '' }}" name="isi_info" id="editor" rows="10">{{ old('isi_info') }}</textarea>
                  @if($errors->has('isi_info'))
                  <div class="invalid-feedback">Isi Informasi Harus Diisi</div>
                  @endif
                </div>
                <div class="form-group">
                  <label for="gambar_info">Gambar</label>
                  <input type="file" class="form-control {{ $errors->has('gambar_info') ? 'is-invalid' : '' }}" name="gambar_info" id="gambar_info" placeholder="" aria-describedby="fileHelpId">
                  @if($errors->has('gambar_info'))
                  <div class="invalid-feedback">Gambar Informasi Harus Diisi</div>
                  @endif
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
@section('footer')
<script src="/asset/js/ckeditor.js"></script>
    <script>
        $('document').ready(function(){
            $('#data-table').DataTable();
        });
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection




