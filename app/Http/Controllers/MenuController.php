<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Produk;
use Error;

class MenuController extends Controller
{
    public function index()
    {
        $ProdukKue = Produk::where('jenis_produk', 'kue')->get();
        $ProdukCatering = Produk::where('jenis_produk', 'catering')->get();
        $Kategori = Kategori::all();

        return view('view-guest.view-menu', compact('ProdukKue', 'ProdukCatering', 'Kategori'));
    }
    public function getProductWhere($id)
    {
        $ProdukKue = Produk::where('id_kategori', $id)->where('jenis_produk', 'kue')->get();
        $ProdukCatering = Produk::where('id_kategori', $id)->where('jenis_produk', 'catering')->get();
        $Kategori = Kategori::all();
        return view('view-guest.view-menu', compact('ProdukCatering', 'ProdukKue', 'Kategori'));
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
