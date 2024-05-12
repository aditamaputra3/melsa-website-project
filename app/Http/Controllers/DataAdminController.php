<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DataAdminController extends Controller
{
    public function index(Request $request)
    {
        $data = User::all();
        if ($request->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function ($row) {
                    $btn = '<a href="javascript:void(0)" data-id="' . $row->id . '" class="edit btn btn-warning btn-sm editData"><i class="fa fa-edit"></i></a>';

                    $btn .= ' <a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-danger btn-sm deleteData" data-url="' . route('admin.store') . '"><i class="fa fa-trash"></i></a>';

                    return $btn;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }

        return view('admin.list');
    }

    public function store(Request $request)
    {
        if (!empty($request->id)) {
            $data = User::find($request->id);
            // Cek apakah username baru sudah digunakan
            if ($request->username !== $data->username && User::where('username', $request->username)->exists()) {
                return response()->json(['error' => 'Username telah terdaftar.'], 400);
            }
            $data->nama_admin = $request->nama_admin;
            $data->username = $request->username;
            if (!empty($request->password)) {
                $data->password = bcrypt($request->password);
            }
            $data->save();
        } else {
            // Cek apakah username sudah digunakan
            if (User::where('username', $request->username)->exists()) {
                return response()->json(['error' => 'Username sudah terdaftar.'], 400);
            }
            User::create([
                'id_pengguna' => $this->idOtomatis(),
                'nama_admin' => $request->nama_admin,
                'username' => $request->username,
                'password' => bcrypt($request->password),
            ]);
        }

        return response()->json(['success' => 'Data saved successfully.']);
    }


    private function idOtomatis()
    {
        $count = User::where('id_pengguna', 'like', 'ADM%')->count();

        $nextNumber = sprintf('%02d', $count + 1);

        return 'ADM' . $nextNumber;
    }


    public function edit($id)
    {
        $data_admin = User::find($id);
        return response()->json($data_admin);
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return response()->json(['success' => 'Data deleted successfully.']);
    }
}
