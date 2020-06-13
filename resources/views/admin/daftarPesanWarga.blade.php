@extends('adminlayout.main')

@section('title', 'Pesan Warga')

@section('container')
    <div class="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title"><h2>Daftar Pesan Warga</h2></div>
                        @if(session('sukses'))
                            <div class="alert alert-success">
                                {{ session('sukses') }}
                            </div>
                        @endif
                        @foreach ($pesan as $message)
                        <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="3318ac44-8cf9-a071-8f0e-fd719c4285c4">
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row m-t-0">
                                <div class="p-2"><img src="../../assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text w-100">
                                    <h6 class="font-medium">{{ $message->warga->nama_warga }}</h6>
                                    <span class="m-b-15 d-block">{{ $message->isi_pesan }}</span>
                                    <div class="comment-footer">
                                        <span class="text-muted float-right">{{ $message->created_at->diffForHumans() }}</span>
                                        <a href="/balasPesanWarga/{{ $message->id }}" class="btn btn-cyan btn-sm">Balas</a>
                                        <a href="/hapusPesanWarga/{{ $message->id }}" class="btn btn-danger btn-sm">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
