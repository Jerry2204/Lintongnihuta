<?php

namespace App\Http\Controllers;

use App\Biodata_warga;
use App\User;
use App\Warga;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class Biodata_wargaController extends Controller
{
    public function add(Request $request, $id)
    {
        $this->validate($request, [
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'foto' => 'required'
        ]);

        $biodata_warga = new Biodata_warga;
        $biodata_warga->warga_id = $id;
        $biodata_warga->agama = $request->agama;
        $biodata_warga->jenis_kelamin = $request->jenis_kelamin;
        $biodata_warga->tanggal_lahir = $request->tanggal_lahir;
        if($request->hasFile('foto')){
            $request->file('foto')->move('asset/images/',$request->file('foto')->getClientOriginalName());
            $biodata_warga->foto = $request->file('foto')->getClientOriginalName();
        }
        $biodata_warga->save();
        return back()->with('sukses', 'Biodata berhasil disimpan');
    }

    public function ubah(Warga $id)
    {
        return view('warga.ubahData', ['warga' => $id]);
    }

    public function update(Request $request, Warga $id)
    {
        $this->validate($request, [
            'nama_warga' => 'required',
            'NIK' => 'required|numeric',
            'alamat' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required'
        ]);

        $id_user = $id->user_id;
        User::where('id', $id_user)->update(['name' => $request->nama_warga]);

        $warga = $id;
        $warga->update([
            'nama_warga' => $request->nama_warga,
            'NIK' => $request->NIK,
            'alamat' => $request->alamat
        ]);

        $id_biodata_warga = $warga->biodata_warga->id;
        $biodata_warga = Biodata_warga::where('id', $id_biodata_warga);
        $biodata_warga->update(['agama' => $request->agama,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tanggal_lahir' => $request->tanggal_lahir]);

        if($request->hasFile('foto')){
            $request->file('foto')->move('asset/images/',$request->file('foto')->getClientOriginalName());
            $biodata_warga->update([
                'foto' => $request->file('foto')->getClientOriginalName()
            ]);
        }
        return back()->with('sukses', 'Data Berhasil Diubah');
    }
}
