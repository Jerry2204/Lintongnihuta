@extends('adminlayout.main')

@section('title', 'perangkat desa')

@section('container')

<div class="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2>Perangkat Desa</h2>
                        @if(session('sukses'))
                        <div class="alert alert-success">{{ session('sukses') }}</div>
                        @endif
                    </div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary my-2 float-right" data-toggle="modal" data-target="#exampleModal">
                        Tambah Kepala Desa
                    </button>
                    <table class="table table-striped" id="data-table">
                        <thead class="thead-dark">
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Nama Sekdes</th>
                                <th>Tanggal Lahir Sekdes</th>
                                <th>Jenis Kelamin Sekdes</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kades as $kepala_desa)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $kepala_desa->nama }}</td>
                                <td>{{ $kepala_desa->tanggal_lahir }}</td>
                                <td>
                                    @if($kepala_desa->jenis_kelamin == "L")
                                    {{ "Laki-laki" }}
                                    @else
                                    {{ "Perempuan" }}
                                    @endif
                                </td>
                                <td>{{ $kepala_desa->sekdes->nama_sekdes }}</td>
                                <td>{{ $kepala_desa->sekdes->tanggal_lahir_sekdes }}</td>
                                <td>{{ $kepala_desa->sekdes->jenis_kelamin_sekdes }}</td>
                                <td>
                                    <a href="/perangkatDesa/{{ $kepala_desa->id }}/edit" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="/perangkatDesa/{{ $kepala_desa->id }}/delete" onclick="return confirm('Apakah anda yakin akan menghapus data?')" class="btn btn-sm btn-danger">Hapus</a>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Kepala Desa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="/kades/create" method="POST" enctype="multipart/form-data">
                @csrf
                <h5>Kepala Desa</h5>
                <div class="form-group">
                    <label for="nama">Nama Kepala Desa</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Kepala Desa">
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin"></label>
                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="foto">Foto</label>
                  <input type="file" class="form-control-file" name="foto" id="foto" placeholder="">
                </div>
                <hr>
                <h5>Sekretaris Desa</h5>
                <div class="form-group">
                    <label for="nama_sekdes">Nama Sekretaris Desa</label>
                    <input type="text" class="form-control" name="nama_sekdes" id="nama_sekdes" placeholder="Masukkan Nama Sekretaris Desa">
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir_sekdes">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir_sekdes" id="tanggal_lahir_sekdes">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin_sekdes"></label>
                    <select class="form-control" name="jenis_kelamin_sekdes" id="jenis_kelamin_sekdes">
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="foto_sekdes">Foto</label>
                    <input type="file" class="form-control-file" name="foto_sekdes" id="foto_sekdes" placeholder="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
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
