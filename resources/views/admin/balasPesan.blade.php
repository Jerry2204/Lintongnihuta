@extends('adminlayout.main')

@section('title', 'Balas Pesan')

@section('container')
    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-4">
                    <h2 class="text-center">Balas Pesan</h2>
                    @if(session('sukses'))
                        <div class="alert alert-success">{{ session('sukses') }}</div>
                    @endif
                    <form action="/balasPesan/{{ $pesan->id }}" method="post" class="p-3">
                        @csrf
                        <div class="form-group mt-4">
                          <label for="balasan">Balasan Pesan</label>
                          <textarea class="form-control" name="balasan" id="balasan" rows="10" placeholder="Masukkan Balasan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-cyan">Kirim Balasan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
