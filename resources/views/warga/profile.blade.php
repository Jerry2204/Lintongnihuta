@extends('adminlayout.main')

@section('title', 'Profile')

@section('container')
    <div class="page-wrapper">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-12 p-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2 class="text-center">Profile</h2>
                            <p class="text-center">Nama: {{ $warga->nama_warga }}</p>
                            <img src="/asset/images/{{ $warga->biodata_warga->foto }}" class="rounded-circle mx-auto mb-4 d-block" width="250" height="250" alt="404">
                            <p class="text-center">NIK: {{ $warga->NIK }}</p>
                            <p class="text-center">Alamat: {{ $warga->alamat }}</p>
                            <p class="text-center">Agama: {{ $warga->biodata_warga->agama }}</p>
                            <p class="text-center">Tanggal Lahir: {{ $warga->biodata_warga->tanggal_lahir }}</p>
                            <p class="text-center">Jenis Kelamin: @if($warga->biodata_warga->jenis_kelamin == "L") Laki-laki @else Perempuan @endif</p>
                        </div>
                    </div>
                    <a href="/biodataWarga/{{ $warga->id }}/ubah" class="btn btn-cyan mb-5 mx-auto d-block">Ubah Profile</a>
                </div>
            </div>
        </div>
    </div>
@endsection
