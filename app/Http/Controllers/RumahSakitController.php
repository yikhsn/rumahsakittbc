<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rumahsakit;
use App\Models\Kecamatan;
use App\Models\Kabupaten;
use App\Models\Provinsi;

class RumahSakitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $rumahsakits = Rumahsakit::with([
            'kecamatan.kabupaten.provinsi',
            'dokters',
            'pasiens',
        ])->orderBy('id', 'desc')->paginate(15);

        $data = json_decode($rumahsakits->toJSON());
        $number = ($data->current_page - 1) * 15;

        // dd($data->current_page);

        return view('rumah_sakit.index', compact('rumahsakits', 'number'));
    }

    public function show($id)
    {

        $rumahsakit = Rumahsakit::with([
            'kecamatan',
            'dokters',
            'pasiens',
        ])->find($id);

        // dd($rumahsakit);

        return view('rumah_sakit.show', compact([
            'rumahsakit'
        ]));
    }

    public function insert()
    {
        $provinsis = Provinsi::all();

        $kabupatens = Kabupaten::all();

        $kecamatans = Kecamatan::all();

        // dd($provinsis);

        return view('rumah_sakit.insert', compact([
            'provinsis',
            'kabupatens',
            'kecamatans'
        ]));
    }

    public function store(Request $request)
    {
        $validatedDataRS = $request->validate([
            'nama'              => 'required | max:255',
            'no_rumahsakit'     => 'required | max:255', 
            'no_telepon'        => 'required',
            'kecamatan_id'      => 'required | integer',
            'alamat'            => 'required | min:20 | max:255',
        ]);

        $rumahsakit = new Rumahsakit();
        $rumahsakit->fill($validatedDataRS);
        $rumahsakit->save();

        return redirect('/rumahsakit');
    }

    public function edit($id)
    {
        $provinsis = Provinsi::all();

        $kabupatens = Kabupaten::all();

        $kecamatans = Kecamatan::all();

        $rumahsakit = Rumahsakit::with([
            'kecamatan',
            'dokters',
            'pasiens',
        ])->find($id);

        return view('rumah_sakit.edit', compact(
            [
                'rumahsakit',
                'provinsis',
                'kabupatens',
                'kecamatans'
            ]
        ));
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
