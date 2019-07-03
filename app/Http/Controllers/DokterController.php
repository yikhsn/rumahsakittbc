<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;
use App\Models\Rumahsakit;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;

class DokterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $dokters = Dokter::with([
            'kecamatan',
            'rumahsakit',
            'pasiens'
        ])->orderBy('id', 'desc')->paginate(15);

        $data = json_decode($dokters->toJSON());
        $number = ($data->current_page - 1) * 15;

        // dd($data->current_page);

        return view('dokter.index', compact(['dokters', 'number']));
    }

    public function show($id)
    {
        $dokter = Dokter::with([
            'kecamatan',
            'rumahsakit',
            'pasiens'
        ])->find($id);

        // dd($dokter);

        return view('dokter.show', compact(['dokter']));
    }

    public function insert()
    {
        $provinsis = Provinsi::all();

        $kabupatens = Kabupaten::all();

        $kecamatans = Kecamatan::all();

        $rumahsakits = Rumahsakit::all();

        return view('dokter.insert', compact([
            'provinsis',
            'kabupatens',
            'kecamatans',
            'rumahsakits',
        ]));
    }

    public function store()
    {
        Dokter::create([
            'nama'              => request('nama'),
            'usia'              => request('usia'),
            'agama'             => request('agama'),
            'nik'               => request('nik'),
            'no_telepon'        => request('no_telepon'),
            'alamat'            => request('alamat'),
            'kecamatan_id'      => request('kecamatan_id'),
            'rumahsakit_id'     => request('rumahsakit_id')
        ]);

        return redirect('/dokter');
    }

    public function edit($id)
    {
        $dokter = Dokter::with([
            'kecamatan',
            'rumahsakit',
            'pasiens'
        ])->find($id);


        $provinsis = Provinsi::all();

        $kabupatens = Kabupaten::all();

        $kecamatans = Kecamatan::all();

        $rumahsakits = Rumahsakit::all();

        // dd($dokter);

        return view('dokter.edit', compact([
            'dokter',
            'provinsis',
            'kabupatens',
            'kecamatans',
            'rumahsakits',
        ]));
    }

    public function update($id)
    {
        Dokter::where('id', $id)
        ->update([
            'nama'              => request('nama'),
            'usia'              => request('usia'),
            'agama'             => request('agama'),
            'nik'               => request('nik'),
            'no_telepon'        => request('no_telepon'),
            'alamat'            => request('alamat'),
            'kecamatan_id'      => request('kecamatan_id'),
            'rumahsakit_id'     => request('rumahsakit_id')
        ]);

        return redirect('/dokter/' . $id);
    }


    public function delete($id)
    {
        // dd($id);

        Dokter::find($id)->delete();

        return redirect('/dokter');
    }
}
