<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Pendamping;
use App\Models\JenisPenyakit;
use App\Models\Evaluasi;
use App\Models\Dokter;
use App\Models\Rumahsakit;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use DateTime;

class PasienUlangController extends Controller
{
    public function old_pasien_id(Request $request)
    {
        $provinsis = Provinsi::all();

        $kabupatens = Kabupaten::all();

        $kecamatans = Kecamatan::all();

        $pasien = $request->session()->get('pasien');
        
        // dd($pasien);

        return view('pasien.old.id', compact(
            [
                'provinsis',
                'kabupatens',
                'kecamatans',
                'pasien'
            ]
        ));
    }

    public function old_pasien_id_store(Request $request)
    {
        $validatedData = $request->validate([
            'nama'              => 'required',
            'tempat_lahir'      => 'required',
            'jenis_kelamin'     => 'required',
            'tanggal_lahir'     => 'required',
            'email'             => 'required',
            'password'          => 'required',
            'agama'             => 'required',
            'nik'               => 'required',
            'no_telepon'        => 'required',
            'alamat'            => 'required',
            'kecamatan_id'      => 'required',
            'type_id'           => 'required',
        ]);

        if(empty($request->session()->get('pasien'))){
            $pasien = new Pasien();
            $pasien->fill($validatedData);
            $request->session()->put('pasien', $pasien);
        }
        else{
            $pasien = $request->session()->get('pasien');
            $pasien->fill($validatedData);
            $request->session()->put('pasien', $pasien);
        }
    
        return redirect('/pasien/old/riwayat');
    }

    public function old_pasien_riwayat(Request $request)
    {
        $pasien = $request->session()->get('pasien');
        return view('pasien.old.riwayat', compact('pasien'));
    }

    public function old_pasien_riwayat_store(Request $request)
    {
        $validatedData = $request->validate([
            'hasil_sputum'                      => 'required',
            'jumlah_sputum'                     => 'required',
            'catatan_kesehatan'                 => 'nullable',
            'awal_pengobatan_sebelumnya'        => 'required',
            'akhir_pengobatan_sebelumnya'       => 'required',
            'kelangkapan_pengobatan_sebelumnya' => 'required',
            'tempat_pengobatan_sebelumnya'      => 'required',
            'nama_dokter_sebelumnya'            => 'required',
            'alamat_pengobatan_sebelumnya'      => 'required',
            'hasil_sputum_sebelumnya'           => 'required',
            'jumlah_sputum_sebelumnya'          => 'required',
            'status_kesembuhan_sebelumnya'      => 'required',
        ]);

        $pasien = $request->session()->get('pasien');
        $pasien->fill($validatedData);

        // dd($pasien);

        // comment this for a while
        $request->session()->put('pasien', $pasien);
        return redirect('/pasien/old/kriteria');
    }
    
    public function old_pasien_kriteria(Request $request)
    {
        $pasien = $request->session()->get('pasien');
        $jenis_penyakits = JenisPenyakit::where('type_id', '2')->get();
        $evaluasis = Evaluasi::all();
        $dokters = Dokter::all();
        $rumahsakits = Rumahsakit::all();

        return view('pasien.old.kriteria', compact(
            [
                'pasien',
                'jenis_penyakits',
                'evaluasis',
                'rumahsakits',
                'dokters'
            ]
        ));
    }

    public function old_pasien_kriteria_store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis_penyakit_id'     => 'required',
            'evaluasi_id'           => 'required',
            'rumahsakit_id'        => 'required',
            'dokter_id'             => 'required',
        ]);

        $pasien = $request->session()->get('pasien');
        $pasien->fill($validatedData);

        // dd($validatedData);

        $request->session()->put('pasien', $pasien);

        return redirect('/pasien/old/pendamping');
    }

    public function old_pasien_pendamping(Request $request)
    {
        $provinsis = Provinsi::all();
        $kabupatens = Kabupaten::all();
        $kecamatans = Kecamatan::all();

        $pasien = $request->session()->get('pasien');
        $pendamping = $request->session()->get('pendamping');

        return view('pasien.old.pendamping', compact(
            [
                'pasien',
                'pendamping',
                'provinsis',
                'kabupatens',
                'kecamatans'
            ]
        ));
    }

    public function old_pasien_pendamping_store(Request $request)
    {
        $validatedDataPendamping = $request->validate([
            'nama'              => 'required',
            'nik'               => 'required',
            'usia'              => 'required',
            'hubungan_pasien'   => 'required',
            'jenis_kelamin'     => 'required',
            'agama'             => 'required',
            'no_telepon'        => 'required',
            'kecamatan_id'      => 'required',
            'alamat'            => 'required',
        ]);

        if(empty($request->session()->get('pendamping'))){
            $pendamping = new Pendamping();
            $pendamping->fill($validatedDataPendamping);
            $request->session()->put('pendamping', $pendamping);
        }
        else{
            $pendamping = $request->session()->get('pendamping');
            $pendamping->fill($validatedDataPendamping);
            $request->session()->put('pendamping', $pendamping);
        }

        // $pendamping->save();
        
        $pasien = $request->session()->get('pasien');
        $pasien->fill([
            'pendamping_nik'    => $request->nik
        ]);
        $request->session()->put('pasien', $pasien);

        return redirect('/pasien/old/finish');
    }

    public function old_pasien_finish(Request $request)
    {
        $pasien = $request->session()->get('pasien');
        $pendamping = $request->session()->get('pendamping');

        // dd($pendamping);

        return view('pasien.old.finish', compact(
            [
                'pasien',
                'pendamping'
            ]
        ));
    }

    public function old_pasien_finish_store(Request $request)
    {
        $pasien = $request->session()->get('pasien');
        $pendamping = $request->session()->get('pendamping');

        $pendamping->save();
        $pasien->save();

        return redirect('/pasien');
    }
}
