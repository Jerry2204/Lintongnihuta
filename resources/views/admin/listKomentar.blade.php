@extends('adminlayout.main')

@section('title', 'Komentar')

@section('container')
    <div class="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Latest Posts</h4>
                        @if(session('sukses'))
                        <div class="alert alert-success">{{ session('sukses') }}</div>
                        @endif
                    <div class="comment-widgets scrollable ps-container ps-theme-default" data-ps-id="2f9cf71e-6517-6715-9dce-3a7b4d50b3c6">
                        <!-- Comment Row -->
                        @foreach ($komentar as $comment)
                        <div class="d-flex flex-row comment-row m-t-0">
                            <div class="p-2"><img src="../../assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div>
                            <div class="comment-text w-100">
                                <h6 class="font-medium">{{ $comment->nama }}</h6>
                                <span class="m-b-15 d-block">{{ $comment->komentar }}</span>
                                <div class="comment-footer">
                                    <span class="text-muted float-right">{{ $comment->updated_at->diffForHumans() }}</span>
                                    <a href="/balasKomentar/{{ $comment->id }}" class="btn btn-success btn-sm">Balas</a>
                                    <a href="/Komentar/{{ $comment->id }}/hapus" class="btn btn-danger btn-sm">Hapus</a>
                                </div>
                                <hr>
                                <b>Balasan:</b>
                                @foreach ($comment->balasan_komentar as $balasan)
                                <div class="comment-footer">
                                <span class="text-muted float-right">{{ $balasan->updated_at->diffForHumans() }}</span>
                                <span class="m-b-15 d-block">{{ $balasan->isi_balasan }}</span>
                                <a href="/balasanKomentar/{{ $balasan->id }}/hapus" class="btn btn-danger btn-sm">Hapus</a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                </div>
            </div>
        </div>
@endsection
