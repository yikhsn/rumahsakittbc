<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluasi;
use App\Models\JenisPenyakit;
use App\Models\Type;

class KriteriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function referensi_kriteria()
    {
        $evaluasis = Evaluasi::with([
            'jenis_penyakit.type'
        ])->get();

        // dd($evaluasis);

        return view('referensi.kriteria', compact('evaluasis'));
    }

    public function add_kriteria()
    {
        $types = Type::all();

        $jenis_penyakits = JenisPenyakit::all();

        return view('referensi.add_kriteria', compact([
            'types',
            'jenis_penyakits'
        ]));
    }

    public function store_kriteria(Request $request)
    {
        $validatedData = $request->validate([
            'nama'                  => 'required',
            'keterangan'            => 'required',
            'jenis_penyakit_id'     => 'required',
        ]);

        Evaluasi::create($validatedData);

        return redirect('/referensi/kriteria');
    }

    public function edit_kriteria($id)
    {
        $evaluasi = Evaluasi::with(['jenis_penyakit.type'])->find($id);

        // dd($evaluasi);

        $types = Type::all();

        $jenis_penyakits = JenisPenyakit::all();

        return view('referensi.edit_kriteria', compact([
            'evaluasi',
            'types',
            'jenis_penyakits'
        ]));
    }

    public function update_kriteria($id)
    {
        Evaluasi::where('id', $id)
        ->update([
            'nama'                  => request('nama'),
            'keterangan'            => request('keterangan'),
            'jenis_penyakit_id'     => request('jenis_penyakit_id'),

        ]);

        return redirect('/referensi/kriteria');
    }

    public function delete_kriteria($id)
    {        
        Evaluasi::find($id)->delete();

        return redirect('/referensi/kriteria');
    }
}
