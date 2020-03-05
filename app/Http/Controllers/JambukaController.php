<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
use App\Jambuka;
use File;

class jambukaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jambuka = Jambuka::all();
        return view('backend.jambuka.index', compact('jambuka'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jambuka = Jambuka::all();
        return view('backend.jambuka.create', compact('jambuka'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jambuka = new Jambuka;
        $jambuka->Hari = $request->Hari;
        $jambuka->Jam_buka = $request->Jam_buka;
        $jambuka->Jam_tutup = $request->Jam_tutup;
        $jambuka->save();
        return redirect()->route('jambuka.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jambuka = Jambuka::findOrFail($id);
        return view('backend.jambuka.show', compact('jambuka'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jambuka = Jambuka::findOrFail($id);
        return view('backend.jambuka.edit', compact('jambuka'));
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
        $jambuka = Jambuka::findOrFail($id);
        $jambuka->Hari = $request->Hari;
        $jambuka->Jam_buka = $request->Jam_buka;
        $jambuka->Jam_tutup = $request->Jam_tutup;
        $jambuka->save();
        return redirect()->route('jambuka.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jambuka = Jambuka::destroy($id);
        return redirect()->route('jambuka.index');
    }
}
