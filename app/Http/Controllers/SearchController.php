<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Rumahsakit;

class SearchController extends Controller
{
    public function pasien(Request $request)
    {        
        $query = request('query');

        $pasiens = Pasien::with([
            'kecamatan.kabupaten.provinsi',
            'rumahsakit',
            'dokter',
            'pendamping',
            'jenis_penyakit',
            'type',
            'evaluasi'
        ])->where('nama', 'LIKE','%'. $query . '%')->get();

        return $pasiens;
    }

    public function dokter(Request $request)
    {        
        $query = request('query');

        $dokters = Dokter::with([
            'kecamatan',
            'rumahsakit',
            'pasiens'
        ])->where('nama', 'LIKE','%'. $query . '%')->get();

        return $dokters;
    }


    public function rumahsakit(Request $request)
    {        
        $query = request('query');

        $dokters = Rumahsakit::with([
            'kecamatan.kabupaten.provinsi',
            'dokters',
            'pasiens',
        ])->where('nama', 'LIKE','%'. $query . '%')->get();

        return $dokters;
    }
}
