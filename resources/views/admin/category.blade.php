@extends('adminlayout.main')

@section('container')
<div class="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2>Kategori Informasi</h2>
                        @if (session('sukses'))
                            <div class="alert alert-success">{{ session('sukses') }}</div>
                        @endif
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary float-right mb-3" data-toggle="modal" data-target="#exampleModal">
                            Tambah Kategori
                        </button>
                        <div class="clear"></div>
                        <table class="table table-striped" id="data-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $kategori)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kategori->nama_kategori }}</td>
                                    <td>
                                        <a href="/category/{{ $kategori->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="/category/{{ $kategori->id }}/delete" onclick="return confirm('Apakah anda yakin ingin menghapus kategori {{ $kategori->nama_kategori }} ?')" class="btn btn-sm btn-danger">Hapus</a>
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori Informasi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="/category/create" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_kategori">Nama Kategori</label>
                    <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" placeholder="Masukkan Nama Kategori">
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
