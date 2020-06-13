@extends('adminlayout.main')

@section('title', 'Detail Warga')


@section('container')

        <div class="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h2 class="text-center">Detail Warga</h2>
                                @if(empty($warga->biodata_warga->foto))
                                @else
                                <img src="/asset/images/{{ $warga->biodata_warga->foto }}" class="img-thumbnail mx-auto d-block mb-4" alt="404" width="300">
                                @endif
                                <h4 class="mt-5 text-center">Nama: {{ $warga->nama_warga }}</h4>
                                <h4 class="mt-3 text-center">NIK: {{ $warga->NIK }}</h4>
                                <h4 class="mt-3 text-center">Alamat: {{ $warga->alamat }}</h4>
                                <h4 class="mt-3 text-center">Agama: @if(empty($warga->biodata_warga->agama)) {{ '' }} @else {{ $warga->biodata_warga->agama }} @endif</h4>
                                <h4 class="mt-3 text-center">Jenis Kelamin: @if(empty($warga->biodata_warga->jenis_kelamin)) {{ '' }} @else @if($warga->biodata_warga->jenis_kelamin == 'L') {{ 'Laki-laki' }} @else {{ 'Perempuan' }} @endif @endif</h4>
                                <h4 class="mt-3 text-center">Tanggal Lahir: @if(empty($warga->biodata_warga->tanggal_lahir)){{ '' }} @else {{ $warga->biodata_warga->tanggal_lahir }}  @endif</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

