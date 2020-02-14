<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\layanan;
use File;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan = layanan::all();
        return view('backend.layanan.index', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $layanan = new layanan;
        $layanan->Nama_layanan = $request->Nama_layanan;
        $layanan->Harga_layanan = $request->Harga_layanan;
        if ($request->hasFile('Gambar')) {
            $file = $request->file('Gambar');
            $path = public_path() . '/assets/img/layanan/';
            $filename = Str::random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $layanan->Gambar = $filename;
        }
        $layanan->save();
        return redirect()->route('layanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('backend.layanan.show', compact('layanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('backend.layanan.edit', compact('layanan'));
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
        $layanan = layanan::findOrFail($id);
        $layanan->Nama_layanan = $request->Nama_layanan;
        $layanan->Harga_layanan = $request->Harga_layanan;
        if ($request->hasFile('Gambar')) {
            $file = $request->file('Gambar');
            $path = public_path() . '/assets/img/layanan/';
            $filename = Str::random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $layanan->Gambar = $filename;

            if($layanan->Gambar){
                $old_Gambar = $layanan->Gambar;
                $filepath = public_path().'/assets/img/layanan/'.$layanan->Gambar;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    //Exception $e;
                }
            }
        }
        $layanan->save();
        return redirect()->route('layanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $layanan = layanan::destroy($id);
        return redirect()->route('layanan.index');
    }
}
