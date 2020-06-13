@extends('adminlayout.main')

@section('title', 'List Warga')

@section('container')
    <div class="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2>Daftar Warga</h2>
                            @if(session('sukses'))
                            <div class="alert alert-success">{{ session('sukses') }}</div>
                            @endif()
                            <table class="table mt-4" id="data-table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($warga as $citizen)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $citizen->nama_warga }}</td>
                                        <td>{{ $citizen->NIK }}</td>
                                        <td>{{ $citizen->alamat }}</td>
                                        <td>
                                            <a href="/warga/{{ $citizen->id }}/detail" class="btn btn-sm btn-cyan">Detail</a>
                                            <a href="/warga/{{ $citizen->id }}/delete" onclick="return confirm('Apakah Anda yakin ingin menghapus {{ $citizen->nama_warga }}?')" class="btn btn-sm btn-danger">Hapus</a>
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
@endsection
@section('footer')
    <script>
        $('document').ready(function(){
            $('#data-table').DataTable();
        });
    </script>
@endsection
