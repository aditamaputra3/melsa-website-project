<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index(Request $request, $jenis_produk = null)
    {
        if ($jenis_produk === null) {

            return redirect()->route('dashboard');

            // return view('errors.404');

            // return response()->view('errors.404', [], 404);
        }

        $melsared1Style = 'background-color: #D90802 !important; color: #FFFFFF !important;';
        $kategori = DB::table('kategori')
            ->pluck('nama_kategori', 'id')
            ->toArray();

        if ($request->ajax()) {
            $data = Produk::with(['kategori'])
                ->where('jenis_produk', $jenis_produk)
                ->latest()
                ->get();

                return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function ($row) use ($melsared1Style) {
                    $btn = '<a href="javascript:void(0)" data-id="' . $row->id . '" class="edit btn btn-warning btn-sm editData"><i class="fa fa-edit"></i></a>';
                    $btn .= ' <a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-sm deleteData" style="' . $melsared1Style . '" data-url="' . route('produk.store') . '"><i class="fa fa-trash"></i></a>';
                    return $btn;
                })
                ->addColumn('nama_kategori', function ($row) {
                    if ($row->kategori) {
                        return $row->kategori->nama_kategori;
                    } else {
                        return ''; // atau nilai lain yang Anda inginkan untuk menggantikan nilai null
                    }
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }

        return view('produk.list', ["kategori" => $kategori, "jenis_produk" => $jenis_produk]);
    }

    public function store(Request $request)
    {
        $updatedBy = Auth::id();

        $gambar_barang = $request->file("foto_produk");

        if ($request->hasFile('foto_produk') && $request->file('foto_produk')->isValid()) {
            $folderPath = 'images';
            if (!Storage::exists($folderPath)) {
                Storage::makeDirectory($folderPath);
            }
            $gambar_path = $request->file('foto_produk')->store($folderPath, 'public');
        } elseif (empty($request->id)) {
            $gambar_path = "default.png";
        }
        
        if (!empty($request->id)) {
            $produk = Produk::find($request->id);
            $produk->nama_produk = $request->nama_produk;
            $produk->harga_produk = $request->harga_produk;
            $produk->deskripsi_produk = $request->deskripsi_produk;
            $produk->id_kategori = $request->id_kategori;
            $produk->jenis_produk = $request->jenis_produk;
            $produk->updatedby = $updatedBy;
            if (!empty($gambar_path)) $produk->foto_produk = $gambar_path;
            $produk->save();
        } else {
            $produk = new Produk();
            $produk->id_produk = $this->idOtomatis();
            $produk->nama_produk = $request->nama_produk;
            $produk->harga_produk = $request->harga_produk;
            $produk->foto_produk = $gambar_path ?? "default.png";
            $produk->deskripsi_produk = $request->deskripsi_produk;
            $produk->id_kategori = $request->id_kategori;
            $produk->jenis_produk = $request->jenis_produk;
            $produk->updatedby = $updatedBy;
            $produk->save();
        }

        return response()->json(['success' => 'Data saved successfully.']);
    }

    private function idOtomatis()
    {
        $prefix = 'PRD';
        $count = Produk::where('id_produk', 'like', $prefix . '%')->count();
        $nextNumber = sprintf('%02d', $count + 1);
        $newId = $prefix . $nextNumber;

        // Check if the generated ID already exists
        while (Produk::where('id_produk', $newId)->exists()) {
            $count++;
            $nextNumber = sprintf('%02d', $count + 1);
            $newId = $prefix . $nextNumber;
        }

        return $newId;
    }

    public function edit($id, Request $request)
    {
        $produk = Produk::find($id);

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
            ]);

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Simpan gambar ke folder 'public/images'

            // Hapus gambar lama jika ada, kecuali jika nama filenya adalah 'default.png'
            if (!empty($produk->foto_produk) && $produk->foto_produk !== 'default.png') {
                $oldImagePath = public_path('images') . '/' . $produk->foto_produk;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $produk->foto_produk = $imageName; // Menyimpan nama file gambar baru ke dalam kolom foto_produk
        }

        if ($produk->foto_produk) {
            $produk->foto_produk = asset('storage/' . $produk->foto_produk);
        }

        return response()->json($produk);
    }

    public function destroy($id)
    {
        $produk = Produk::find($id);

        // Hapus gambar dari storage jika ada, kecuali jika nama filenya adalah 'default.png'
        if (!empty($produk->foto_produk) && $produk->foto_produk !== 'default.png') {
            $imageFilePath = public_path('storage/' . $produk->foto_produk);
            if (file_exists($imageFilePath)) {
                unlink($imageFilePath);
            }
        }

        $produk->delete();
        return response()->json(['success' => 'Data deleted successfully.']);
    }
}
