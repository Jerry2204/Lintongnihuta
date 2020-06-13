@extends('adminlayout.main')

@section('title', 'Edit Akun')

@section('container')
    <div class="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2 class="text-center">Edit Akun</h2>
                            @if(session('sukses'))
                            <div class="alert alert-success">{{ session('sukses') }}</div>
                            @endif
                            <form action="/accountSetting/{{ $user->id }}/process" method="post">
                                @csrf
                                <div class="form-group mt-4">
                                  <label for="username">Username</label>
                                  <input type="text" name="username" value="{{ $user->username }}" id="username" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                  <label for="password">Password</label>
                                  <input type="password" class="form-control" name="password" id="password" placeholder="">
                                </div>
                                <button type="submit" class="btn btn-cyan">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
