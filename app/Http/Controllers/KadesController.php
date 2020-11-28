<?php

namespace App\Http\Controllers;

use App\Kades;
use App\Sekdes;
use Illuminate\Http\Request;

class KadesController extends Controller
{
    public function index(){
        $kades = Kades::all();
        return view('admin.perangkat_desa', compact('kades'));
    }

    public function addKades(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'foto' => 'required',
            'nama_sekdes' => 'required',
            'tanggal_lahir_sekdes' => 'required',
            'jenis_kelamin_sekdes' => 'required',
            'foto_sekdes' => 'required'
        ]);

        $kades = new Kades;
        $kades->nama = $request->nama;
        $kades->tanggal_lahir = $request->tanggal_lahir;
        $kades->jenis_kelamin = $request->jenis_kelamin;
        if($request->hasFile('foto')){
            $request->file('foto')->move('asset/images/',$request->file('foto')->getClientOriginalName());
            $kades->foto = $request->file('foto')->getClientOriginalName();
        }
        $kades->save();

        $sekdes = new Sekdes;
        $sekdes->nama_sekdes = $request->nama_sekdes;
        $sekdes->tanggal_lahir_sekdes = $request->tanggal_lahir_sekdes;
        $sekdes->jenis_kelamin_sekdes = $request->jenis_kelamin_sekdes;
        if($request->hasFile('foto_sekdes')){
            $request->file('foto_sekdes')->move('asset/images/',$request->file('foto_sekdes')->getClientOriginalName());
            $sekdes->foto_sekdes = $request->file('foto_sekdes')->getClientOriginalName();
        }
        $sekdes->kades_id = $kades->id;
        $sekdes->save();
        return back()->with('sukses', 'Data Berhasil disimpan');
    }

    public function edit(Kades $id){
        $kades = $id;

        return view('admin.editPerangkatDesa', compact('kades'));
    }

    public function update(Request $request, Kades $id){
        $this->validate($request, [
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'nama_sekdes' => 'required',
            'tanggal_lahir_sekdes' => 'required',
            'jenis_kelamin_sekdes' => 'required'
        ]);

        $id_sekdes = $id->sekdes->id;

        $kades = $id;
        $kades->nama = $request->nama;
        $kades->tanggal_lahir = $request->tanggal_lahir;
        $kades->jenis_kelamin = $request->jenis_kelamin;
        if($request->hasFile('foto')){
            $request->file('foto')->move('asset/images/',$request->file('foto')->getClientOriginalName());
            $kades->foto = $request->file('foto')->getClientOriginalName();
        }
        $kades->save();

        $sekdes = Sekdes::find($id_sekdes);
        $sekdes->nama_sekdes = $request->nama_sekdes;
        $sekdes->tanggal_lahir_sekdes = $request->tanggal_lahir_sekdes;
        $sekdes->jenis_kelamin_sekdes = $request->jenis_kelamin_sekdes;
        if($request->hasFile('foto_sekdes')){
            $request->file('foto_sekdes')->move('asset/images/',$request->file('foto_sekdes')->getClientOriginalName());
            $sekdes->foto_sekdes = $request->file('foto_sekdes')->getClientOriginalName();
        }
        $sekdes->save();

        return redirect('/perangkatDesa')->with('sukses', 'Data Perangkat Desa Berhasil diubah');
    }

    public function delete(Kades $id){
        $id->sekdes()->delete();
        $id->delete($id);

        return back()->with('sukses', 'Data berhasil dihapus');
    }
}
