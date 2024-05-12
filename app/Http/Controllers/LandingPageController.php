<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        // 	$Praktikum = Praktikum::count();
        // $Asisten = AsistenLab::count();
        // $Pengajuan= PengajuanJadwal::where('status_pengajuan', '=', 'menunggu')->count();
        // $Koordinator = Dosen::count();
        
        return view('view-guest.view-home');
    
        // return view('dashboard.index', compact('Praktikum', 'Asisten', 'Pengajuan','Koordinator'));
        }
}
