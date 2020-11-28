<?php

namespace App\Http\Controllers;

use App\BalasKomentar;
use App\Category;
use App\Informasi;
use App\Kategori;
use App\Pengunjung;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has("cari")){
            $wisata = Informasi::where('isi_info', 'LIKE', '%' . $request->cari .  '%')->get();
        }else{
            $wisata = Informasi::whereHas('Category', function (Builder $query) {
                $query->where('nama_kategori', 'like', 'Wisata%');
            })->limit(3)->get();
        }

        $komentar = Pengunjung::orderBy('id', 'desc')
                    ->limit(10)
                    ->get();

        $berita_terbaru = Informasi::orderBy('id_informasi', 'desc')->limit(3)->get();
        // $komentar = DB::table('pengunjung')
        //             ->orderBy('id', 'desc')
        //             ->limit(10)
        //             ->get();
        $pengunjung = Pengunjung::all();

        $kategori = Category::all();
        return view('public.home', compact('wisata', 'komentar', 'pengunjung', 'berita_terbaru', 'kategori'));
        // return view('public.home', ['wisata' => $wisata, 'komentar' => $komentar, 'pengunjung' => $pengunjung, 'berita_terbaru' => $berita_terbaru]);
    }

    public function allWisata()
    {
        $wisata = Informasi::where('kategori', 'wisata')->get();
        return view('public.allWisata', ['wisata' => $wisata]);
    }

    public function allPenginapan()
    {
        $penginapan = Informasi::where('kategori', 'penginapan')->get();
        return view('public.allPenginapan', ['penginapan' => $penginapan]);
    }

    // public function allWisata()
    // {
    //     $wisata = Informasi::where('kategori', 'wisata')->get();
    //     return view('public.allWisata', ['wisata' => $wisata]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id_admin)
    {
        $this->validate($request, [
            'judul_info' => 'required',
            'kategori' => 'required',
            'isi_info' => 'required',
            'gambar_info' => 'required'
        ]);

        $informasi = new Informasi;
        $informasi->judul_info = $request->judul_info;
        $informasi->category_id = $request->kategori;
        $informasi->isi_info = $request->isi_info;
        $informasi->admin_id = $id_admin;
        if($request->hasFile('gambar_info')){
            $request->file('gambar_info')->move('asset/images/',$request->file('gambar_info')->getClientOriginalName());
            $informasi->gambar_info = $request->file('gambar_info')->getClientOriginalName();
            $informasi->save();
        }

        return back()->with('sukses', 'Informasi Berhasil Ditambahkan');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function penginapan_show()
    {
        $penginapan = Informasi::where('kategori', 'penginapan')->limit(10)->get();

        return view('public.penginapan', ['penginapan' => $penginapan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informasi = Informasi::find($id);
        $kategori = Category::all();
        return view('admin.editInformasi', compact('informasi', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul_info' => 'required',
            'isi_info' => 'required',
            'kategori' => 'required',
        ]);

        $informasi = Informasi::find($id);
        $informasi->update($request->all());
        $informasi->judul_info = $request->judul_info;
        $informasi->isi_info = $request->isi_info;
        $informasi->category_id = $request->kategori;
        $informasi->admin_id = auth()->user()->admin->id;
        if($request->hasFile('gambar_info')){
            $request->file('gambar_info')->move('asset/images/',$request->file('gambar_info')->getClientOriginalName());
            $informasi->gambar_info = $request->file('gambar_info')->getClientOriginalName();
            $informasi->save();
        }
        return redirect('/informasi')->with('sukses', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $informasi = Informasi::find($id);
        $informasi->delete($informasi);
        return back()->with('sukses', 'Data Berhasil dihapus');
    }

    public function gallery_show()
    {
        $informasi = Informasi::all();
        return view('public.gallery', ['informasi' => $informasi]);
    }

    public function single_berita(Informasi $id)
    {
        $kategori = Category::all();
        $komentar = Pengunjung::where('informasi_id_informasi', $id->id_informasi)->orderBy('id', 'desc')->limit(3)->get();
        return view('public.single_berita', ['berita' => $id, 'komentar' => $komentar, 'kategori' => $kategori]);
    }

    public function allInformasi(Category $id){
        return view('public.allWisata', ['informasi' => $id]);
    }

    public function search(Request $request){
        $wisata = Informasi::where('isi_info', 'LIKE', '%' . $request->cari .  '%')->get();
        $keyword = $request->cari;

        return view('public.halamanCari', compact('wisata', 'keyword'));
    }
}
