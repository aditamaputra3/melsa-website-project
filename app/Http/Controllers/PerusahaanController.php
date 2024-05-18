<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function index()
    {
        $perusahaan = Perusahaan::firstOrNew();

        // Jika belum ada data, buat objek baru dengan nilai-nilai default
        if (!$perusahaan->exists) {
            $perusahaan->nama_perusahaan = '';
            $perusahaan->slogan = '';
            $perusahaan->no_telp = '';
            $perusahaan->alamat = '';
            $perusahaan->deskripsi = '';
            $perusahaan->email = '';
            $perusahaan->instagram = '';
            $perusahaan->gmaps = '';
            $perusahaan->tiktok = '';
        }
        return view('perusahaan.list', compact('perusahaan'));
    }

    public function update(Request $request)
    {
        $perusahaan = Perusahaan::updateOrInsert(
            ['id' => 1], // Karena hanya ada satu baris data, gunakan id = 1
            [
                'id_perusahaan' => '1',
                'nama_perusahaan' => $request->nama_perusahaan,
                'slogan' => $request->slogan,
                'no_telp' => $request->no_telp,
                'alamat' => $request->alamat,
                'deskripsi' => $request->deskripsi,
                'email' => $request->email,
                'instagram' => $request->instagram,
                'gmaps' => $request->gmaps,
                'tiktok' => $request->tiktok,
            ]
        );
    
        return response()->json(['success' => 'Data perusahaan berhasil diperbarui.']);
    }
}