<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\layanan1;
use File;

class Layanan1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan1 = layanan1::all();
        return view('backend.layanan1.index', compact('layanan1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.layanan1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $layanan1 = new layanan1;
        $layanan1->Nama_layanan1 = $request->Nama_layanan1;
        $layanan1->Harga_layanan1 = $request->Harga_layanan1;
        if ($request->hasFile('Gambar')) {
            $file = $request->file('Gambar');
            $path = public_path() . '/assets/img/layanan1/';
            $filename = Str::random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $layanan1->Gambar = $filename;
        }
        $layanan1->save();
        return redirect()->route('layanan1.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $layanan1 = Layanan1::findOrFail($id);
        return view('backend.layanan1.show', compact('layanan1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $layanan1 = Layanan1::findOrFail($id);
        return view('backend.layanan1.edit', compact('layanan1'));
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
        $layanan1 = layanan1::findOrFail($id);
        $layanan1->Nama_layanan1 = $request->Nama_layanan1;
        $layanan1->Harga_layanan1 = $request->Harga_layanan1;
        if ($request->hasFile('Gambar')) {
            $file = $request->file('Gambar');
            $path = public_path() . '/assets/img/layanan1/';
            $filename = Str::random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $layanan1->Gambar = $filename;

            if($layanan1->Gambar){
                $old_Gambar = $layanan1->Gambar;
                $filepath = public_path().'/assets/img/layanan1/'.$layanan1->Gambar;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    //Exception $e;
                }
            }
        }
        $layanan1->save();
        return redirect()->route('layanan1.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $layanan1 = layanan1::destroy($id);
        return redirect()->route('layanan1.index');
    }
}
