<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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
                    $btn = '<a href="javascript:void(0)" data-id="' . $row->id . '" class="edit btn btn-warning btn-sm editData"><i class="fa fa-edit"></i>&nbsp;Edit</a>';

                    $btn .= ' <a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-danger btn-sm deleteData" data-url="' . route('pengguna.store') . '"><i class="fa fa-trash"></i>&nbsp;Delete</a>';

                    return $btn;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }

        return view('pengguna.list');
    }

    public function store(Request $request)
    {
        if (!empty($request->id)) {
            $data = User::find($request->id);
            $data->id_pengguna = $this->generateIdPengguna();
            $data->id_perusahaan = 1; // Set id_perusahaan sebagai 1
            $data->nama_admin = $request->nama_admin;
            if (!empty($request->password)) {
                $data->password = bcrypt($request->password);
            }
            $data->save();
        } else {
            User::create([
                'id_pengguna' => $this->generateIdPengguna(),
                'id_perusahaan' => 1, // Set id_perusahaan sebagai 1
                'nama_admin' => $request->nama_admin,
                'password' => bcrypt($request->password),
            ]);
        }

        return response()->json(['success' => 'Data saved successfully.']);
    }

    private function generateIdPengguna()
    {
        // Ambil jumlah pengguna dengan awalan "ADM"
        $count = User::where('id_pengguna', 'like', 'ADM%')->count();

        // Increment jumlah pengguna dan format menjadi dua digit
        $nextNumber = sprintf('%02d', $count + 1);

        // Gabungkan dengan awalan "ADM"
        return 'ADM' . $nextNumber;
    }


    public function edit($id)
    {
        $data_pengguna = User::find($id);
        return response()->json($data_pengguna);
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return response()->json(['success' => 'Data deleted successfully.']);
    }
}