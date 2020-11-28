@extends('adminlayout.main')

@section('container')
<div class="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2>Edit Kategori Informasi</h2>
                        <form action="/category/{{ $kategori->id }}/update" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="nama_kategori">Nama Kategori</label>
                              <input type="text" name="nama_kategori" id="nama_kategori" value="{{ $kategori->nama_kategori }}" class="form-control" placeholder="Masukkan Nama Kategori">
                            </div>
                            <button type="submit" class="btn btn-cyan">Edit Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
