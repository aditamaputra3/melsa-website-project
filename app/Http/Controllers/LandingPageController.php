<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class LandingPageController extends Controller
{
    public function index()
    {
        $ProdukKue = Produk::where('jenis_produk', 'kue')->get();
        $ProdukCatering = Produk::where('jenis_produk', 'catering')->get();

        return view('view-guest.view-home', compact('ProdukKue', 'ProdukCatering'));

        // return view('dashboard.index', compact('Praktikum', 'Asisten', 'Pengajuan','Koordinator'));
    }
}
