<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Error;

class MenuController extends Controller
{
    public function index()
    {
        $ProdukKue = Produk::where('jenis_produk', 'kue')->get();
        $ProdukCatering = Produk::where('jenis_produk', 'catering')->get();

        return view('view-guest.view-menu', compact('ProdukKue', 'ProdukCatering'));
    }

    public function getDetail($id)
    {
        $related = null;
        $data = Produk::findOrFail($id);
        if ($data['jenis_produk'] === 'catering') {
            $related = Produk::where('jenis_produk', 'catering')->get();
        }
        if ($data['jenis_produk'] === 'kue') {
            $related = Produk::where('jenis_produk', 'kue')->get();
        }

        return view('view-guest.view-menu-detail', compact('data', 'related'));
    }
}
