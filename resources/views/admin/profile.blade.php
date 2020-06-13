@extends('adminlayout.main')

@section('title', 'Profile Admin')

@section('container')
    <div class="page-wrapper">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2 class="text-center">Profile</h2>
                            <h4 class="text-center">Nama: {{ $user->name }}</h4>
                            <img src="/asset/images/{{ $user->admin->foto }}" class="img-thumbnail mx-auto d-block mb-4" alt="404" width="300">
                            <h4 class="text-center">Alamat: {{ $user->admin->alamat }}</h4>
                            <h4 class="text-center">Tanggal Lahir: {{ $user->admin->tanggal_lahir }}</h4>
                        </div>
                    </div>
                    <a href="/admin_profile/{{ $user->admin->id }}/edit" class="btn btn-cyan mb-5 d-block mx-auto">Ubah Profile</a>
                </div>
            </div>
        </div>
    </div>
@endsection
