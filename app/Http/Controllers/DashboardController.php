<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $ProdukKue = Produk::where('jenis_produk', '=', 'kue')->count();
        $ProdukCatering = Produk::where('jenis_produk', '=', 'catering')->count();
        $Kategori = Kategori::count();
        $Admin = User::count();
    
	return view('dashboard.index', compact('ProdukKue', 'ProdukCatering', 'Kategori', 'Admin'));

    // return view('dashboard.index', compact('Praktikum', 'Asisten', 'Pengajuan','Koordinator'));
	}
}
