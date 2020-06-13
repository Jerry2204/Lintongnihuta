@extends('adminlayout.main')

@section('title', 'Edit Informasi')

@section('header')
    <style>
        .ck-editor__editable_inline {
        min-height: 300px;
        }
    </style>
@endsection

@section('container')
    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3 p-5">
                    <h2 class="text-center">Edit Informasi</h2>
                    <form action="/informasi/{{ $informasi->id_informasi }}/update" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                        <div class="form-group">
                        <label for="judul_info">Judul Informasi</label>
                        <input type="text" value="{{ $informasi->judul_info }}" name="judul_info" id="judul_info" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                        <label for="isi_info">Isi Informasi</label>
                        <textarea class="form-control" id="editor" name="isi_info" id="isi_info" rows="10">{{ $informasi->isi_info }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control {{ $errors->has('kategori') ? 'is-invalid' : '' }}" name="kategori" id="kategori">
                                <option value="">-- Pilih Kategori --</option>
                                <option value="wisata" @if($informasi->kategori == 'wisata') {{ 'selected' }} @endif>Wisata Alam</option>
                                <option value="penginapan" @if($informasi->kategori == 'penginapan') {{ 'selected' }} @endif>Penginapan</option>
                                <option value="berita" @if($informasi->kategori == 'berita') {{ 'selected' }} @endif>Berita</option>
                            </select>
                            @if($errors->has('kategori'))
                                <div class="invalid-feedback">Kategori Harus Diisi</div>
                            @endif
                        </div>
                        <div class="form-group">
                        <label for="gambar_info">Gambar</label>
                        <input type="file" class="form-control" name="gambar_info" id="gambar_info" placeholder="" aria-describedby="fileHelpId">
                        </div>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
<script src="/asset/js/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
