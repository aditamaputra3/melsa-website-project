<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Kategori;

class KategoriController extends Controller
{

    public function index(Request $request)
    {
        $data = Kategori::all();
        if ($request->ajax()) {
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('aksi', function ($row) {
                    $btn = '<a href="javascript:void(0)" data-id="' . $row->id . '" class="edit btn btn-warning btn-sm editData"><i class="fa fa-edit"></i>&nbsp;Edit</a>';

                    $btn .= ' <a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-danger btn-sm deleteData" data-url="' . route('kategori.store') . '"><i class="fa fa-trash"></i>&nbsp;Delete</a>';

                    return $btn;
                })
                ->rawColumns(['aksi'])
                ->make(true);
        }

        return view('kategori.list');
    }

    public function store(Request $request)
    {
        if (!empty($request->id)) {
            $data = Kategori::find($request->id);
            $data->nama_kategori = $request->nama_kategori;
          
            $data->save();
        } else {
            Kategori::create([
                'nama_kategori' => $request->nama_kategori,
            ]);
        }

        return response()->json(['success' => 'Data saved successfully.']);
    }


    // private function generateIdKategori()
    // {
    //     // Ambil jumlah pengguna dengan awalan "ADM"
    //     $count = Kategori::where('id_kategori', 'like', 'KTG%')->count();

    //     // Increment jumlah pengguna dan format menjadi dua digit
    //     $nextNumber = sprintf('%02d', $count + 1);

    //     // Gabungkan dengan awalan "ADM"
    //     return 'KTG' . $nextNumber;
    // }


    public function edit($id)
    {
        $data_kategori = Kategori::find($id);
        return response()->json($data_kategori);
    }

    public function destroy($id)
    {
        Kategori::find($id)->delete();
        return response()->json(['success' => 'Data deleted successfully.']);
    }
}
