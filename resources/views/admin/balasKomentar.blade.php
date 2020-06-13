@extends('adminlayout.main')

@section('title', 'Balas Komentar')

@section('container')
    <div class="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2 class="text-center">Balas Komentar Pengunjung</h2>
                            @if(session('sukses'))
                            <div class="alert alert-success">{{ session('sukses') }}</div>
                            @endif
                            <form class="mt-5" action="/kirimBalasanKomentar/{{ $komentar->id }}" method="post">
                                @csrf
                                <div class="form-group">
                                  <label for="isi_balasan">Balasan Komentar</label>
                                  <textarea placeholder="Masukkan Balasan Komentar" class="form-control {{ $errors->has('isi_balasan') ? 'is-invalid' : '' }}" name="isi_balasan" id="isi_balasan" rows="10"></textarea>
                                </div>
                                @if($errors->has('isi_balasan'))
                                <div class="alert alert-danger">Isi Balasan Harus diisi</div>
                                @endif
                                <button type="submit" class="btn btn-cyan">Kirim</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
