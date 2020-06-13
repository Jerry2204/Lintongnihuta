@extends('adminlayout.main')

@section('title', 'Balasan')

@section('header')
    <style>
        .min-height-card{
            min-height: 465px;
        }
    </style>
@endsection

@section('container')
        <div class="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h2 class="text-center">Balasan Pesan</h2>
                            </div>
                            <div class="comment-widgets min-height-card scrollable ps-container ps-theme-default mt-4" data-ps-id="dc59addc-8b3e-2314-5cb1-ceb2f37e78ac">
                                <!-- Comment Row -->
                                @foreach ($pesan->balasan as $balasan)
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><img src="../../assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Admin</h6>
                                        <span class="m-b-15 d-block">{{ $balasan->isi_balasan }}</span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">{{ $balasan->created_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

