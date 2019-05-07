<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

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
        ])->get();

        dd($dokters);

        return view('dokter.index', compact(['dokters']));
    }

    public function show($id)
    {
        $dokter = Dokter::with([
            'kecamatan',
            'rumahsakit',
            'pasiens'
        ])->find($id);

        dd($dokter);

        return view('dokter.show', compact(['dokter']));
    }

    public function insert()
    {
        return view('dokter.insert');
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

        // dd($dokter);

        return view('dokter.edit', compact(['dokter']));
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
        dd($id);

        Dokter::find($id)->delete();

        return redirect('/dokter');
    }
}
