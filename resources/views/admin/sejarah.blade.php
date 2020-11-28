@extends('adminlayout.main')

@section('title', 'Tentang Desa')

@section('header')
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
                        <h2>Tentang Desa Lintong Nihuta</h2>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary float-right mb-3" data-toggle="modal" data-target="#exampleModal">
                            Tambah Data
                        </button>
                        <div style="clear: both"></div>
                        @if (session('sukses'))
                            <div class="alert alert-success">
                                {{ session('sukses') }}
                            </div>
                        @endif
                        <table class="table table-striped" id="data-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Isi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sejarah as $history)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{!! Str::words($history->sejarah, 15) !!}</td>
                                    <td>
                                        <a href="/about" class="btn btn-sm btn-cyan">Detail</a>
                                        <a href="/sejarah/{{ $history->id }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="/sejarah/{{ $history->id }}/delete" onclick="return confirm('Apakah anda yakin akan menghapus informasi ini?')" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Informasi Tentang Desa Lintong Nihuta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="/sejarah/create" method="POST">
                @csrf
                <div class="form-group">
                    <label for="sejarah">Isi Informasi</label>
                    <textarea class="form-control {{ $errors->has('sejarah') ? 'is-invalid' : '' }}" name="sejarah" id="editor" rows="10">{{ old('sejarah') }}</textarea>
                    @if($errors->has('sejarah'))
                    <div class="invalid-feedback">Isi Informasi Harus Diisi</div>
                    @endif
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>
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
