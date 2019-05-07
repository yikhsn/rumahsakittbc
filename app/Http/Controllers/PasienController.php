<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Provinsi;


class PasienController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function index()
    { 
        $pasiens = Pasien::with([
            'kecamatan',
            'rumahsakit',
            'dokter',
            'pendamping',
            'jenis_penyakit',
            'type'
        ])->get();

        dd($pasiens);

        return  view('pasien.index', compact(['pasiens']));
    }

    public function show($id)
    {
        $pasien = Pasien::with([
            'kecamatan',
            'rumahsakit',
            'dokter',
            'pendamping',
            'jenis_penyakit',
            'type'
        ])->find($id);

        dd($pasien);

        return view('pasien.show', compact(['pasien']));
    }

    public function insert()
    {
        return view('pasien.insert');
    }

    public function store()
    {
        Pasien::create([
            'nama'                          =>    request('nama'),
            'usia'                          =>    request('usia'),
            'agama'                         =>    request('agama'),
            'nik'                           =>    request('nik'),
            'no_telepon'                    =>    request('no_telepon'),
            'alamat'                        =>    request('alamat'),
            'kecamatan_id'                  =>    request('kecamatan_id'),
            'type_id'                       =>    request('type_id'),
            'jenis_penyakit_id'             =>    request('jenis_penyakit_id'),
            'pendamping_id'                 =>    request('pendamping_id'),
            'dokter_id'                     =>    request('dokter_id'),
            'rumahsakit_id'                 =>    request('rumahsakit_id')
        ]);

        return redirect('/pasien');
    }

    public function edit($id)
    {
        $pasien = Pasien::with([
            'kecamatan',
            'rumahsakit',
            'dokter',
            'pendamping',
            'jenis_penyakit',
            'type'
        ])->find($id);

        return view('pasien.edit', compact(['pasien']));
    }

    public function update($id)
    {
        Pasien::where('id', $id)
            ->update([
                'nama'                  =>    request('nama'),
                'usia'                  =>    request('usia'),
                'agama'                 =>    request('agama'),
                'nik'                   =>    request('nik'),
                'no_telepon'            =>    request('no_telepon'),
                'alamat'                =>    request('alamat'),
                'kecamatan_id'          =>    request('kecamatan_id'),
                'type_id'               =>    request('type_id'),
                'jenis_penyakit_id'     =>    request('jenis_penyakit_id'),
                'pendamping_id'         =>    request('pendamping_id'),
                'dokter_id'             =>    request('dokter_id'),
                'rumahsakit_id'         =>    request('rumahsakit_id')
        ]);

        return redirect('/pasien/' . $id);
    }

    public function delete($id)
    {
        Pasien::find($id)->delete();

        return redirect('/pasien');
    }
}