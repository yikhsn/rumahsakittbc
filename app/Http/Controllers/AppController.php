<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Rumahsakit;

class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $pasiens = Pasien::take(10)->get();

        $jumlah_pasien_baru = Pasien::where('type_id', 1)->count();

        $jumlah_pasien_lama = Pasien::where('type_id', 2)->count();

        $jumlah_rumah_sakit = Rumahsakit::get()->count();

        return view('welcome', compact(
            [
                'pasiens',
                'jumlah_pasien_baru',
                'jumlah_pasien_lama',
                'jumlah_rumah_sakit'
            ]
        ));
    }

    public function referensi_kriteria()
    {
        return view('referensi.kriteria');
    }
}
