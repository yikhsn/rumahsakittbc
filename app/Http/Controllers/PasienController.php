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

class PasienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $request->session()->forget('pasien');
        $request->session()->forget('pendamping');

        $pasiens = Pasien::take(10)->with([
            'kecamatan.kabupaten.provinsi',
            'rumahsakit',
            'dokter',
            'pendamping',
            'jenis_penyakit',
            'type'
        ])->get();

        // dd($pasiens);

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

        $awal_pengobatan_sebelumnya =  new DateTime($pasien->awal_pengobatan_sebelumnya);
        $akhir_pengobatan_sebelumnya =  new DateTime($pasien->akhir_pengobatan_sebelumnya);

        $lama_pengobatan_sebelumnya = $akhir_pengobatan_sebelumnya->diff($awal_pengobatan_sebelumnya)->format('%a');

        return view('pasien.show', compact([
            'pasien',
            'lama_pengobatan_sebelumnya'
        ]));
    }

    public function store()
    {
        Pasien::create([
            'nama'                   =>    request('nama'),
            'agama'                  =>    request('agama'),
            'nik'                    =>    request('nik'),
            'no_telepon'             =>    request('no_telepon'),
            'alamat'                 =>    request('alamat'),
            'kecamatan_id'           =>    request('kecamatan_id'),
            'type_id'                =>    request('type_id'),
            'jenis_penyakit_id'      =>    request('jenis_penyakit_id'),
            'pendamping_id'          =>    request('pendamping_id'),
            'dokter_id'              =>    request('dokter_id'),
            'rumahsakit_id'          =>    request('rumahsakit_id')
        ]);

        return redirect('/pasien/new_pasien_riwayat');
    }

    public function new_pasien_id(Request $request)
    {
        $provinsis = Provinsi::all();

        $kabupatens = Kabupaten::all();

        $kecamatans = Kecamatan::all();

        $pasien = $request->session()->get('pasien');
        
        // dd($pasien);

        return view('pasien.new.id', compact(
            [
                'provinsis',
                'kabupatens',
                'kecamatans',
                'pasien'
            ]
        ));
    }

    public function new_pasien_id_store(Request $request)
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
    
        return redirect('/pasien/new/riwayat');
    }

    public function new_pasien_riwayat(Request $request)
    {
        $pasien = $request->session()->get('pasien');
        return view('pasien.new.riwayat', compact('pasien'));
    }

    public function new_pasien_riwayat_store(Request $request)
    {
        $validatedData = $request->validate([
            'hasil_sputum'          => 'required',
            'jumlah_sputum'         => 'required',
            'pengobatan_satu_bulan' => 'required',
            'catatan_kesehatan'     => 'nullable',
        ]);

        $pasien = $request->session()->get('pasien');
        $pasien->fill($validatedData);

        // comment this for a while
        $request->session()->put('pasien', $pasien);
        return redirect('/pasien/new/kriteria');
    }
    
    public function new_pasien_kriteria(Request $request)
    {
        $pasien = $request->session()->get('pasien');
        $jenis_penyakits = JenisPenyakit::where('type_id', '1')->get();
        $evaluasis = Evaluasi::all();
        $dokters = Dokter::all();
        $rumahsakits = Rumahsakit::all();

        return view('pasien.new.kriteria', compact(
            [
                'pasien',
                'jenis_penyakits',
                'evaluasis',
                'rumahsakits',
                'dokters'
            ]
        ));
    }

    public function new_pasien_kriteria_store(Request $request)
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

        return redirect('/pasien/new/pendamping');
    }

    public function new_pasien_pendamping(Request $request)
    {
        $provinsis = Provinsi::all();
        $kabupatens = Kabupaten::all();
        $kecamatans = Kecamatan::all();

        $pasien = $request->session()->get('pasien');
        $pendamping = $request->session()->get('pendamping');

        return view('pasien.new.pendamping', compact(
            [
                'pasien',
                'pendamping',
                'provinsis',
                'kabupatens',
                'kecamatans'
            ]
        ));
    }

    public function new_pasien_pendamping_store(Request $request)
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

        return redirect('/pasien/new/finish');
    }

    public function new_pasien_finish(Request $request)
    {
        $pasien = $request->session()->get('pasien');
        $pendamping = $request->session()->get('pendamping');

        // dd($pendamping);

        return view('pasien.new.finish', compact(
            [
                'pasien',
                'pendamping'
            ]
        ));
    }

    public function new_pasien_finish_store(Request $request)
    {
        $pasien = $request->session()->get('pasien');
        $pendamping = $request->session()->get('pendamping');

        $pendamping->save();
        $pasien->save();

        return redirect('/pasien');
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
        $jenis_penyakits = JenisPenyakit::where('type_id', '1')->get();
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

    public function edit($id)
    {
        $pasien = Pasien::with([
            'kecamatan',
            'rumahsakit',
            'dokter',
            'pendamping',
            'jenis_penyakit',
            'type',
            'evaluasi'
        ])->find($id);

        $provinsis = Provinsi::all();
        $kabupatens = Kabupaten::all();
        $kecamatans = Kecamatan::all();
        $evaluasis = Evaluasi::all();
        $jenis_penyakits = JenisPenyakit::all();
        $dokters = Dokter::all();
        $rumahsakits = Rumahsakit::all();

        return view('pasien.edit', compact(
            [
                'pasien',
                'kecamatans',
                'kabupatens',
                'provinsis',
                'jenis_penyakits',
                'evaluasis',
                'dokters',
                'rumahsakits'
            ]
        ));
    }

    public function update($id)
    {

        Pendamping::where('nik', request('nik_pendamping'))
            ->update([
                'nama'                      =>    request('nama_pendamping'),
                'usia'                      =>    request('usia_pendamping'),
                'hubungan_pasien'           =>    request('hubungan_pasien'),
                'jenis_kelamin'             =>    request('jenis_kelamin_pendamping'),
                'no_telepon'                =>    request('no_telepon_pendamping'),
                'agama'                     =>    request('agama_pendamping'),
                'kecamatan_id'              =>    request('kecamatan_id_pendamping'),
                'alamat'                    =>    request('alamat_pendamping'),
        ]);

        Pasien::where('id', $id)
            ->update([
                'nama'                                  =>    request('nama'),
                // 'nik'                                   =>    request('nik'),
                'tempat_lahir'                          =>    request('tempat_lahir'),
                'tanggal_lahir'                         =>    request('tanggal_lahir'),
                'jenis_kelamin'                         =>    request('jenis_kelamin'),
                'no_telepon'                            =>    request('no_telepon'),
                'email'                                 =>    request('email'),
                'password'                              =>    request('password'),
                'agama'                                 =>    request('agama'),
                'alamat'                                =>    request('alamat'),
                'kecamatan_id'                          =>    request('kecamatan_id'),
                'jumlah_sputum'                         =>    request('jumlah_sputum'),
                'hasil_sputum'                          =>    request('hasil_sputum'),
                'pengobatan_satu_bulan'                 =>    request('pengobatan_satu_bulan'),
                'catatan_kesehatan'                     =>    request('catatan_kesehatan'),
                'awal_pengobatan_sebelumnya'            =>    request('awal_pengobatan_sebelumnya'),
                'akhir_pengobatan_sebelumnya'           =>    request('akhir_pengobatan_sebelumnya'),
                'kelangkapan_pengobatan_sebelumnya'     =>    request('kelangkapan_pengobatan_sebelumnya'),
                'tempat_pengobatan_sebelumnya'          =>    request('tempat_pengobatan_sebelumnya'),
                'nama_dokter_sebelumnya'                =>    request('nama_dokter_sebelumnya'),
                'alamat_pengobatan_sebelumnya'          =>    request('alamat_pengobatan_sebelumnya'),
                'jumlah_sputum_sebelumnya'              =>    request('jumlah_sputum_sebelumnya'),
                'hasil_sputum_sebelumnya'               =>    request('hasil_sputum_sebelumnya'),
                'status_kesembuhan_sebelumnya'          =>    request('status_kesembuhan_sebelumnya'),
                'jenis_penyakit_id'                     =>    request('jenis_penyakit_id'),
                'evaluasi_id'                           =>    request('evaluasi_id'),
                'rumahsakit_id'                         =>    request('rumahsakit_id'),
                'dokter_id'                             =>    request('dokter_id'),


        ]);

        return redirect('/pasien/' . $id);
    }

    public function delete($id)
    {
        Pasien::find($id)->delete();

        return redirect('/pasien');
    }
}