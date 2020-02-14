<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\produk;
use App\kategori;
use File;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = produk::all();
        return view('backend.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = produk::all();
        $kategori = kategori::all();
        return view('backend.produk.create', compact('produk', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk = new produk;
        if ($request->hasFile('Gambar')) {
            $file = $request->file('Gambar');
            $path = public_path() . '/assets/img/produk/';
            $filename = Str::random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $produk->Gambar = $filename;
        }
        
        $produk->Nama_produk = $request->Nama_produk;
        $produk->Deskripsi = $request->Deskripsi;
        $produk->slug = str::slug($request->Nama_produk,'-');
        $produk->save();
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = kategori::all();
        $produk = produk::findOrFail($id);
        return view('backend.produk.show', compact('produk', 'kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = kategori::all();
        $produk = produk::findOrFail($id);
        return view('backend.produk.edit', compact('produk', 'kategori'));
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
        $produk = produk::findOrFail($id);
        if ($request->hasFile('Gambar')) {
            $file = $request->file('Gambar');
            $path = public_path() . '/assets/img/produk/';
            $filename = Str::random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $produk->Gambar = $filename;

            if($produk->Gambar){
                $old_Gambar = $produk->Gambar;
                $filepath = public_path().'/assets/img/produk/'.$produk->Gambar;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    //Exception $e;
                }
            }
        }
        $produk->Nama_produk = $request->Nama_produk;
        $produk->Deskripsi = $request->Deskripsi;
        $produk->save();
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = produk::destroy($id);
        return redirect()->route('produk.index');
    }
}
