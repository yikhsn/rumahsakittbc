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
use App\Models\JadwalPasien;
use DateTime;

class PasienUlangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
            'nama'              => 'required | max:255',
            'tempat_lahir'      => 'required | max:255',
            'jenis_kelamin'     => 'required | max:255',
            'tanggal_lahir'     => 'required',
            'email'             => 'required | email | unique:pasiens',
            'password'          => 'required | min:6 | max:255',
            'agama'             => 'required',
            'nik'               => 'required | integer',
            'no_telepon'        => 'required',
            'alamat'            => 'required | min:20',
            'kecamatan_id'      => 'required | integer',
            'type_id'           => 'required | integer',
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
            'jumlah_sputum'                     => 'required | integer',
            'catatan_kesehatan'                 => 'nullable | max:255',
            'awal_pengobatan_sebelumnya'        => 'required',
            'akhir_pengobatan_sebelumnya'       => 'required',
            'kelangkapan_pengobatan_sebelumnya' => 'required | max:255',
            'tempat_pengobatan_sebelumnya'      => 'required | max:255',
            'nama_dokter_sebelumnya'            => 'required | max:255',
            'alamat_pengobatan_sebelumnya'      => 'required | min:10 | max:255',
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
            'jenis_penyakit_id'         => 'required | integer',
            'evaluasi_id'               => 'required | integer',
            'rumahsakit_id'             => 'required | integer',
            'dokter_id'                 => 'required | integer',
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
            'nama'              => 'required | max:255',
            'nik'               => 'required | max:20 | unique:pendampings', 
            'usia'              => 'required | max:11', 
            'hubungan_pasien'   => 'required',
            'jenis_kelamin'     => 'required',
            'agama'             => 'required',
            'no_telepon'        => 'required',
            'kecamatan_id'      => 'required | integer',
            'alamat'            => 'required | min:20 | max:255',
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

        $date = new \DateTime();
                
        for ($x = 1; $x <= 5; $x++) {
            
            $date->add(new \DateInterval('P30D'));

            JadwalPasien::create([
                'nama_jadwal'       => 'Pengambilan Obat',
                'start_at'          => $date,
                'end_at'            => $date,
                'pasien_id'         => $pasien->id,
            ]);
        }

        return redirect('/pasien');
    }
}
