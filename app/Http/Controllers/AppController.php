<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Rumahsakit;
use App\Models\Dokter;

class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $pasiens = Pasien::take(10)->get();

        $rumahsakits = Rumahsakit::take(10)->get();

        $dokters = Dokter::take(10)->get();

        $jumlah_pasien_baru = Pasien::where('type_id', 1)->count();

        $jumlah_pasien_lama = Pasien::where('type_id', 2)->count();

        $jumlah_rumah_sakit = Rumahsakit::get()->count();

        $pasiens_number = 0;
        $rumahsakits_number = 0;
        $dokters_number = 0;

        return view('welcome', compact(
            [
                'rumahsakits',
                'dokters',
                'pasiens',
                'jumlah_pasien_baru',
                'jumlah_pasien_lama',
                'jumlah_rumah_sakit',
                'pasiens_number',
                'rumahsakits_number',
                'dokters_number',
            ]
        ));
    }
}
