<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\layanan;
use App\galleri;

class FrontendController extends Controller
{
    public function layanan()
    {
        $layanan = layanan::get();
        return view ('frontend.layanan', compact('layanan'));
    }

    public function galleri()
    {
        $galleri = galleri::get();
        return view ('frontend.galleri', compact('galleri'));
    }
}