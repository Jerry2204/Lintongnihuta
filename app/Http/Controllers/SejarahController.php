<?php

namespace App\Http\Controllers;

use App\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index(){
        $sejarah = Sejarah::all();
        return view('admin.sejarah', compact('sejarah'));
    }

    public function create(Request $request){
        $this->validate($request, [
            'sejarah' => 'required'
        ]);

        $sejarah = new Sejarah();
        $sejarah->create($request->all());

        return back()->with('sukses', 'Data Berhasil ditambahkan');
    }

    public function edit(Sejarah $id){
        $sejarah = $id;

        return view('admin.editSejarah', compact('sejarah'));
    }

    public function update(Request $request, Sejarah $id){
        $this->validate($request, [
            'sejarah' => 'required'
        ]);

        $id->update($request->all());

        return redirect('/sejarah')->with('sukses', 'Data berhasil diubah');
    }

    public function delete(Sejarah $id){
        $id->delete();

        return back()->with('sukses', 'Data berhasil dihapus');
    }
}
