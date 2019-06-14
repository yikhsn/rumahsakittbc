<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecamatan;
use App\Models\Kabupaten;
use App\Models\Provinsi;
use App\Models\JenisPenyakit;
use App\Models\Evaluasi;
use App\Models\Dokter;
use App\Models\Rumahsakit;

class SelectPlaceController extends Controller
{
    public function kecamatan(Request $request)
    {
        $kabupaten_id = request('query');

        $kecamatans = Kecamatan::where('kabupaten_id', $kabupaten_id)->get();

        return $kecamatans;
    }

    public function kabupaten(Request $request)
    {
        $provinsi_id = request('query');

        $kabupatens = kabupaten::where('provinsi_id', $provinsi_id)->get();

        return $kabupatens;
    }

    public function provinsi(Request $request)
    {
        $provinsis = Provinsi::all();

        return $provinsis;
    }

    public function jenis_penyakit(Request $request)
    {
        $type_id = request('query');

        $jenis_penyakits = JenisPenyakit::where('type_id', $type_id)->get();

        return $jenis_penyakits;
    }

    public function evaluasi(Request $request)
    {
        $jenis_penyakit_id = request('query');

        $evaluasis = Evaluasi::with([
            'jenis_penyakit'
        ])->where('jenis_penyakit_id', $jenis_penyakit_id)->get();

        return $evaluasis;
    }

    public function dokter(Request $request)
    {
        $rumahsakit_id = request('query');

        $dokters = Dokter::with([
            'rumahsakit'
        ])->where('rumahsakit_id', $rumahsakit_id)->get();

        return $dokters;
    }

    public function rumahsakit(Request $request)
    {
        $rumahsakits = Rumahsakit::all();

        return $rumahsakits;
    }
}