<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DataAdminController extends Controller
{
    public function index()
    {
        $admin = User::firstOrNew();

        // Jika belum ada data, buat objek baru dengan nilai-nilai default
        if (!$admin->exists) {
            $admin->nama_admin = '';
            $admin->username = '';
        }
        return view('admin.list', compact('admin'));
    }

    public function update(Request $request)
    {
        // Ambil admin dengan id 1 atau buat instance baru jika tidak ada
        $admin = User::firstOrCreate(['id' => 1]);

        // Update nama_admin dan username
        $admin->nama_admin = $request->nama_admin;
        $admin->username = $request->username;

        // Jika password tidak kosong, maka perbarui password
        if (!empty($request->password)) {
            $admin->password = bcrypt($request->password);
        }

        // Simpan perubahan ke database
        $admin->save();

        return response()->json(['success' => 'Data admin berhasil diperbarui.']);
    }
}
