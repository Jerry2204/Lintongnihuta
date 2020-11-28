@extends('adminlayout.main')

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
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2>Edit Informasi Tentang Desa Lintong Nihuta</h2>
                    </div>
                    <form action="/sejarah/{{ $sejarah->id }}/update" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="sejarah">Isi Informasi</label>
                            <textarea class="form-control" name="sejarah" id="editor" cols="30" rows="10">{{ $sejarah->sejarah }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-cyan">Simpan Perubahan</button>
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
