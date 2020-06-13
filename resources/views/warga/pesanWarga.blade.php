@extends('adminlayout.main')

@section('title', 'Form Pesan')

@section('container')
    <div class="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="min-height: 100px">
                    <div class="card-body">
                        <div class="card-title"><h2>Buat Pesan</h2></div>
                        @if(session('sukses'))
                        <div class="alert alert-success">{{ session('sukses') }}</div>
                        @endif
                        <form action="/kirimPesan/{{ auth()->user()->warga->id }}" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="pesan">Pesan</label>
                          <textarea class="form-control" name="pesan" id="pesan" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2 class="mb-4">Pesan Anda</h2>
                            @foreach ($pesan as $message)
                            <p>{{ $message->isi_pesan }}</p>
                            <small class="d-block">{{ $message->created_at->diffForHumans() }}</small>
                            <a href="/lihatBalasan/{{ $message->id }}" class="btn btn-sm btn-cyan">Lihat Balasan</a>
                            <hr>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
