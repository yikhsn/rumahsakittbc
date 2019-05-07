<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rumahsakit;

class RumahSakitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $rumahsakits = Rumahsakit::with([
            'kecamatan',
            'dokters',
            'pasiens',
        ])->get();

        dd($rumahsakits);

        return view('rumah_sakit.index');
    }

    public function show($id)
    {

        $rumahsakit = Rumahsakit::with([
            'kecamatan',
            'dokters',
            'pasiens',
        ])->find($id);

        dd($rumahsakit);

        return view('rumah_sakit.show', compact(['id']));
    }

    public function insert()
    {
        return view('rumah_sakit.insert');
    }

    public function store()
    {
        Rumahsakit::create([
            'no_rumahsakit'         =>    request('no_rumahsakit'),
            'nama'                  =>    request('nama'),
            'no_telepon'            =>    request('no_telepon'),
            'alamat'                =>    request('alamat'),
            'kecamatan_id'          =>    request('kecamatan_id')
        ]);

        return redirect('/rumahsakit');
    }

    public function edit($id)
    {
        $rumahsakit = Rumahsakit::with([
            'kecamatan',
            'dokters',
            'pasiens',
        ])->find($id);

        return view('rumah_sakit.edit', compact(['rumahsakit']));
    }

    public function update($id)
    {
        Rumahsakit::where('id', $id)
            ->update([
                'no_rumahsakit'         =>    request('no_rumahsakit'),
                'nama'                  =>    request('nama'),
                'no_telepon'            =>    request('no_telepon'),
                'alamat'                =>    request('alamat'),
                'kecamatan_id'          =>    request('kecamatan_id')
        ]);

        return redirect('/rumahsakit/' . $id);
    }

    public function delete($id)
    {
        Rumahsakit::find($id)->delete();

        return redirect('/rumahsakit');
    }
}
