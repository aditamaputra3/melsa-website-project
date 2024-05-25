<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Produk;
use Error;
use Mockery\Undefined;

use function Laravel\Prompts\alert;
use function PHPUnit\Framework\isEmpty;

class MenuController extends Controller
{
    public function index($id = null)
    {
        if (isset($_GET['priceAsc'])) {
            $ProdukKue = Produk::where('jenis_produk', 'kue')->orderBy('harga_produk', 'ASC')->get();
            $ProdukCatering = Produk::where('jenis_produk', 'catering')->orderBy('harga_produk', 'ASC')->get();
            $Kategori = Kategori::all();
        } elseif (isset($_GET['priceDesc'])) {
            $ProdukKue = Produk::where('jenis_produk', 'kue')->orderBy('harga_produk', 'DESC')->get();
            $ProdukCatering = Produk::where('jenis_produk', 'catering')->orderBy('harga_produk', 'DESC')->get();
            $Kategori = Kategori::all();
        } elseif (isset($_GET['nameAsc'])) {
            $ProdukKue = Produk::where('jenis_produk', 'kue')->orderBy('nama_produk', 'ASC')->get();
            $ProdukCatering = Produk::where('jenis_produk', 'catering')->orderBy('nama_produk', 'ASC')->get();
            $Kategori = Kategori::all();
        } elseif (isset($_GET['search'])) {
            if ($_GET['search'] != null) {
                $search = $_GET['search'];
                $ProdukKue = Produk::where('jenis_produk', 'kue')->where('nama_produk', 'LIKE', "%{$search}%")->orwhere('harga_produk', 'LIKE', "%{$search}%")->get();
                $ProdukCatering = Produk::where('jenis_produk', 'catering')->where('nama_produk', 'LIKE', "%{$search}%")->orwhere('harga_produk', 'LIKE', "%{$search}%")->get();
                $Kategori = Kategori::all();
            } else {
                $ProdukKue = Produk::where('jenis_produk', 'kue')->get();
                $ProdukCatering = Produk::where('jenis_produk', 'catering')->get();
                $Kategori = Kategori::all();
            }
        } else {
            $ProdukKue = Produk::where('jenis_produk', 'kue')->get();
            $ProdukCatering = Produk::where('jenis_produk', 'catering')->get();
            $Kategori = Kategori::all();
        }
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $ProdukKue = Produk::where('id_kategori', $id)->where('jenis_produk', 'kue')->get();
            $ProdukCatering = Produk::where('id_kategori', $id)->where('jenis_produk', 'catering')->get();
            $Kategori = Kategori::all();
        }

        return view('view-guest.view-menu', compact('ProdukKue', 'ProdukCatering', 'Kategori'));
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

    public function sortPrice()
    {
        $ProdukKue = Produk::where('jenis_produk', 'kue')->orderBy('harga_produk', 'desc')->get();
        $ProdukCatering = Produk::where('jenis_produk', 'catering')->orderBy('harga_produk', 'desc')->get();
        return compact('ProdukKue', 'ProdukCatering');
    }
}
