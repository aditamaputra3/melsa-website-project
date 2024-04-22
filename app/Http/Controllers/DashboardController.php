<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
	// 	$Praktikum = Praktikum::count();
    // $Asisten = AsistenLab::count();
    // $Pengajuan= PengajuanJadwal::where('status_pengajuan', '=', 'menunggu')->count();
    // $Koordinator = Dosen::count();
    
	return view('dashboard.index');

    // return view('dashboard.index', compact('Praktikum', 'Asisten', 'Pengajuan','Koordinator'));
	}
}
