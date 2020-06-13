@extends('adminlayout.main')

@section('title', 'List Admin')

@section('container')

    <div class="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2 class="text-center">Daftar Admin</h2>
                            @if(session('sukses'))
                            {{ session('sukses') }}
                            @endif
                        </div>
                        <table class="table table-striped" id="data-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admin as $adm)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $adm->nama_admin }}</td>
                                    <td>
                                        @if($adm->jenis_kelamin == "L")
                                        {{ "Laki-laki" }}
                                        @else
                                        {{ "Perempuan" }}
                                        @endif
                                    </td>
                                    <td>{{ $adm->alamat }}</td>
                                    <td>{{ $adm->tanggal_lahir }}</td>
                                    <td>
                                        <a href="/admin/{{ $adm->id }}/delete" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus {{ $adm->nama_admin }}?')">Hapus</a>
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
@endsection

@section('footer')
    <script>
        $('document').ready(function(){
            $('#data-table').DataTable();
        });
    </script>
@endsection
