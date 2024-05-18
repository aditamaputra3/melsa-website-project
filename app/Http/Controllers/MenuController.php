<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class MenuController extends Controller
{
    public function index()
    {
        $ProdukKue = Produk::where('jenis_produk', 'kue')->get();
        $ProdukCatering = Produk::where('jenis_produk', 'catering')->get();

        return view('view-guest.view-menu', compact('ProdukKue', 'ProdukCatering'));
    }
}
