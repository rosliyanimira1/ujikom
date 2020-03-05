<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\layanan;
use App\layanan1;
use App\galleri;
use App\kategori;
use App\Jambuka;
use App\produk;

class FrontendController extends Controller
{
    public function layanan()
    {
        $layanan = layanan::get();
        return view ('frontend.layanan', compact('layanan'));
    }

    public function layanan1()
    {
        $layanan1 = layanan1::get();
        return view ('frontend.layanan1', compact('layanan1'));
    }

    public function galleri()
    {
        $galleri = galleri::get();
        return view ('frontend.galleri', compact('galleri'));
    }

    public function index()
    {
        $jambuka = Jambuka::get();
        return view ('frontend.index', compact('jambuka'));
    }

    public function produk()
    {
        $kategori = kategori::all();
        $produk = produk::orderBy('created_at', 'DESC')->paginate(5);
        return view ('frontend.produk', compact('kategori', 'produk'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $kategori = kategori::all();
        $produk = produk::orderBy('updated_at', 'desc')->where('Nama_produk', 'like', "%".$search."%")->paginate(5);
        return view ('frontend.search', compact('kategori', 'produk'));
    }

    public function filter(Request $request)
    {
        return produk::filter($request)->get();
    }

    public function categoryProduct($slug)
    {
        $produk = kategori::where('slug', $slug)->first()->product()->orderBy('created_at', 'DESC')->paginate(5);
        return view('frontend.produk', compact('produk'));
    }
}