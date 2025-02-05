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
use DB;

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

        $pasiens = Pasien::with([
            'kecamatan.kabupaten.provinsi',
            'rumahsakit',
            'dokter',
            'pendamping',
            'jenis_penyakit',
            'type',
            'evaluasi'
        ])->orderBy('id', 'desc')->paginate(15);

        $data = json_decode($pasiens->toJSON());
        $number = ($data->current_page - 1) * 15;

        // dd($number);

        return  view('pasien.index', compact(['pasiens', 'number']));
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

    public function cetak(Request $request)
    {
        $validatedDataPendamping = $request->validate([
            'dari_tanggal'              => 'required',
            'sampai_tanggal'            => 'required',
        ]);

        $dari_tanggal       = request('dari_tanggal');
        $sampai_tanggal     = request('sampai_tanggal');

        $pasiens = Pasien::with([
            'kecamatan',
            'rumahsakit',
            'dokter',
            'pendamping',
            'jenis_penyakit',
            'type',
            'evaluasi'
        ])->whereBetween('created_at', [$dari_tanggal, $sampai_tanggal])->get();

        // dd($pasiens);

        return view('pasien.cetak', compact('pasiens'));
    }

    public function jadwal($id)
    {
        $jadwal_pasien = JadwalPasien::where('pasien_id', $id)->get();
        $pasien = Pasien::find($id);

        // dd($jadwal_pasien);

        return view('pasien.jadwal', compact([
            'id',
            'jadwal_pasien',
            'pasien'
        ]));
    }

    public function jadwal_store($id)
    {
        JadwalPasien::create([
            'nama_jadwal'           => request('nama_jadwal'),
            'start'                 => request('start'),
            'end'                   => request('end'),
            'color'                 => request('color'),
            'pasien_id'             => request('pasien_id'),
        ]);

        return redirect('/pasien/' . $id . '/jadwal');
    }

}