<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class DataAdminController extends Controller
{
    public function index(Request $request)
    {
        $data = Produk::all();
        if ($request->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function ($row) {
                    $btn = '<a href="javascript:void(0)" data-id="' . $row->id_produk . '" class="edit btn btn-warning btn-sm editData"><i class="fa fa-edit"></i>&nbsp;Edit</a>';

                    $btn .= ' <a href="javascript:void(0)" data-id="' . $row->id_produk . '" class="btn btn-danger btn-sm deleteData" data-url="' . route('admin.store') . '"><i class="fa fa-trash"></i>&nbsp;Delete</a>';

                    return $btn;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }

        return view('admin.list');
    }

    public function store(Request $request)
    {
        $updatedBy = Auth::id();
        // Validasi request
        $request->validate([
            'foto_produk' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan aturan validasi yang Anda butuhkan
        ]);

        // Proses upload gambar
        if ($request->hasFile('foto_produk')) {
            $imageName = time() . '.' . $request->foto_produk->extension();
            $request->foto_produk->storeAs('public/foto_produk', $imageName);
        } else {
            $imageName = null; // Atau berikan nilai default jika tidak ada gambar yang diupload
        }

        // Simpan data produk beserta nama file gambar ke database
        if (!empty($request->id_produk)) {
            $produk = Produk::find($request->id_produk);
            $produk->nama_produk = $request->nama_produk;
            $produk->harga_produk = $request->harga_produk;
            $produk->foto_produk = $imageName;
            $produk->deskripsi_produk = $request->deskripsi_produk;
            $produk->id_kategori = $request->id_kategori;
            $produk->jenis_produk = $request->jenis_produk;
            $produk->updatedby = $updatedBy;
            $produk->save();
        } else {
            Produk::create([
                'id_produk' => $this->idOtomatis(),
                'nama_produk' => $request->nama_produk,
                'harga_produk' => $request->harga_produk,
                'foto_produk' => $imageName,
                'deskripsi_produk' => $request->deskripsi_produk,
                'id_kategori' => $request->id_kategori,
                'jenis_produk' => $request->jenis_produk,
                'updatedby' => $updatedBy,
            ]);
        }

        return response()->json(['success' => 'Data saved successfully.']);
    }

    private function idOtomatis()
    {
        $count = Produk::where('id_produk', 'like', 'PRD%')->count();

        $nextNumber = sprintf('%02d', $count + 1);

        return 'PRD' . $nextNumber;
    }


    public function edit($id)
    {
        $produk = Produk::find($id);
        $produk->foto_produk = asset('storage/foto_produk/' . $produk->foto_produk); // Tambahkan URL gambar produk
        return response()->json($produk);
    }

    public function destroy($id)
    {
        $produk = Produk::find($id);
        // Hapus file gambar terkait dengan produk yang akan dihapus
        if ($produk->foto_produk) {
            Storage::delete('public/foto_produk/' . $produk->foto_produk);
        }
        $produk->delete();
        return response()->json(['success' => 'Data deleted successfully.']);
    }
}
