<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('admin.category', compact('category'));
    }

    public function create(Request $request){
        $this->validate($request, [
            'nama_kategori' => 'required'
        ]);

        $kategori = new Category;
        $kategori->create($request->all());

        return back()->with('sukses', 'Data berhasil ditambahkan');

    }

    public function edit(Category $id){
        $kategori = $id;

        return view('admin.editCategory', compact('kategori'));
    }

    public function update(Request $request, Category $kategori){
        $this->validate($request, [
            'nama_kategori' => 'required'
        ]);

        $kategori->update($request->all());

        return redirect('/category')->with('sukses', 'Data berhasil diubah');
    }

    public function delete(Category $kategori){
        $kategori->delete();

        return back()->with('sukses', 'Data berhasil dihapus');
    }
}
