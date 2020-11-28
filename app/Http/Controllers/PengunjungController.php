<?php

namespace App\Http\Controllers;

use App\Balasan;
use App\BalasKomentar;
use App\Informasi;
use App\Pengunjung;
use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    public function komentar(Request $request, Pengunjung $pengunjung, $id_informasi)
    {
        $this->validate($request, [
           'nama' => 'required',
           'alamat' => 'required',
           'komentar' => 'required'
        ]);

        $pengunjung->nama = $request->nama;
        $pengunjung->alamat = $request->alamat;
        $pengunjung->komentar = $request->komentar;
        $pengunjung->informasi_id_informasi = $id_informasi;
        $pengunjung->save();
        return back()->with('sukses', 'Komentar Berhasil dikirimkan');
    }

    public function balasKomentar(Pengunjung $id)
    {
        return view('admin.balasKomentar', ['komentar' => $id]);
    }

    public function kirimBalasanKomentar(Request $request, $id)
    {
        $this->validate($request, [
            'isi_balasan' => 'required'
        ]);

        $balasanKomentar = new BalasKomentar;
        $balasanKomentar->isi_balasan = $request->isi_balasan;
        $balasanKomentar->pengunjung_id = $id;
        $balasanKomentar->save();

        return back()->with('sukses', 'Balasan Komentar Berhasil dikirim');
    }

    public function hapusKomentar($id)
    {
        $komentar = Pengunjung::find($id);
        $komentar->delete($komentar);
        return back()->with('sukses', 'Komentar Berhasil dihapus');
    }

    public function hapusBalasanKomentar($id)
    {
        $balasan = BalasKomentar::find($id);
        $balasan->delete($balasan);
        return back()->with('sukses', 'Balasan Komentar Berhasil dihapus');
    }
}
