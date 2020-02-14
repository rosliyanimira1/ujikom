<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
use App\galleri;
use File;

class galleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleri = galleri::all();
        return view('backend.galleri.index', compact('galleri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.galleri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $galleri = new galleri;
        if ($request->hasFile('Gambar')) {
            $file = $request->file('Gambar');
            $path = public_path() . '/assets/img/galleri/';
            $filename = Str::random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $galleri->Gambar = $filename;
        }
        $galleri->save();
        return redirect()->route('galleri.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galleri = galleri::findOrFail($id);
        return view('backend.galleri.show', compact('galleri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galleri = galleri::findOrFail($id);
        return view('backend.galleri.edit', compact('galleri'));
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
        $galleri = galleri::findOrFail($id);
        if ($request->hasFile('Gambar')) {
            $file = $request->file('Gambar');
            $path = public_path() . '/assets/img/galleri/';
            $filename = Str::random(6) . '_' . $file->getClientOriginalName();
            $upload = $file->move($path, $filename);
            $galleri->Gambar = $filename;

            if($galleri->Gambar){
                $old_Gambar = $galleri->Gambar;
                $filepath = public_path().'/assets/img/galleri/'.$galleri->Gambar;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    //Exception $e;
                }
            }
        }
        $galleri->save();
        return redirect()->route('galleri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galleri = galleri::destroy($id);
        return redirect()->route('galleri.index');
    }
}
