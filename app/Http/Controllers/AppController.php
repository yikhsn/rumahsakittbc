<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Rumahsakit;
use App\Models\Dokter;
use App\Models\User;
use App\Models\Provinsi;
use App\Models\Kecamatan;
use App\Models\JadwalPasien;

class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $pasiens = Pasien::take(10)->orderBy('id', 'desc')->get();

        $rumahsakits = Rumahsakit::take(10)->orderBy('id', 'desc')->get();

        $dokters = Dokter::take(10)->orderBy('id', 'desc')->get();

        $jumlah_pasien_baru = Pasien::where('type_id', 1)->count();

        $jumlah_pasien_lama = Pasien::where('type_id', 2)->count();

        $jumlah_rumah_sakit = Rumahsakit::get()->count();

        $jadwal_pasien_hari_ini = JadwalPasien::take(5)->with('pasien')->where('start', strftime('%F'))->get();

        $pasiens_number = 0;
        $rumahsakits_number = 0;
        $dokters_number = 0;
        $jadwal_pasien_hari_ini_number = 1;

        return view('welcome', compact(
            [
                'rumahsakits',
                'dokters',
                'pasiens',
                'jumlah_pasien_baru',
                'jumlah_pasien_lama',
                'jumlah_rumah_sakit',
                'pasiens_number',
                'rumahsakits_number',
                'dokters_number',
                'jadwal_pasien_hari_ini',
                'jadwal_pasien_hari_ini_number'
            ]
        ));
    }

    public function grafik()
    {
        $pasiens_pengobatan_ulang = Pasien::where('type_id', 2)->take(10)->orderBy('id', 'desc')->get();
        $pasiens_for_knn = Pasien::where('type_id', 2)->take(10)->orderBy('id', 'desc')->get();

        foreach($pasiens_for_knn as $pasien){

            // c1_knn
            $jumlah_sputum = $pasien->jumlah_sputum;

            // c2_knn
            $hasil_sputum = $pasien->hasil_sputum ;
            $nilai_hasil_sputum = 0;
            if ($hasil_sputum == "Positif") $nilai_hasil_sputum = 1;
            else $nilai_hasil_sputum = 2;

            // c3_knn
            $nilai_evaluasi = $pasien->evaluasi->id;

            // hasil_knn
            $hasil_knn = $pasien->nilai_sputum + $nilai_hasil_sputum + $nilai_evaluasi;

            // nilai_knn
            $d_1 = ($pasien->nilai_sputum+9);
            $d_2 = ($nilai_hasil_sputum +9);
            $d_3 = ($nilai_evaluasi + 9);
            $d_hasil = $d_1 + $d_2 + $d_3;
            $nilai_knn = sqrt($d_hasil);


            Pasien::where('id', $pasien->id)
            ->update([
                'knn_c1'                                =>    $jumlah_sputum,
                'knn_c2'                                =>    $nilai_hasil_sputum,
                'knn_c3'                                =>    $nilai_evaluasi,
                'jumlah_knn'                            =>    $hasil_knn,
                'hasil_knn'                             =>    $nilai_knn,
        ]);
        }

        $jumlah_pasien = Pasien::all()->count();
        $jumlah_pasien_baru = Pasien::where('type_id', 1)->count();
        $jumlah_pasien_lama = Pasien::where('type_id', 2)->count();
        $jumlah_pasien_perempuan = Pasien::where('jenis_kelamin', 'Perempuan')->count();
        $jumlah_pasien_lelaki = Pasien::where('jenis_kelamin', 'Laki-laki')->count();

        // BTA PLUS DATA
        $jumlah_pasien_bta_plus = Pasien::where('jenis_penyakit_id', 1)->count();
        $jumlah_pasien_bta_plus_perempuan = Pasien::where([
            ['jenis_penyakit_id', '=', 1],
            ['jenis_kelamin', '=', 'Perempuan'],
        ])->count();
        $jumlah_pasien_bta_plus_lelaki = Pasien::where([
            ['jenis_penyakit_id', '=', 1],
            ['jenis_kelamin', '=', 'Laki-laki'],
        ])->count();
        $jumlah_pasien_bta_plus_lelaki_persen = $jumlah_pasien_bta_plus_lelaki == 0 ? 0 : ($jumlah_pasien_bta_plus_lelaki / $jumlah_pasien_bta_plus) * 100;
        $jumlah_pasien_bta_plus_perempuan_persen = $jumlah_pasien_bta_plus_perempuan == 0 ? 0 : ($jumlah_pasien_bta_plus_perempuan / $jumlah_pasien_bta_plus) * 100;


        // BTA MINUS
        $jumlah_pasien_bta_minus = Pasien::where('jenis_penyakit_id', 2)->count();
        $jumlah_pasien_bta_minus_perempuan = Pasien::where([
            ['jenis_penyakit_id', '=', 2],
            ['jenis_kelamin', '=', 'Perempuan'],
        ])->count();
        $jumlah_pasien_bta_minus_lelaki = Pasien::where([
            ['jenis_penyakit_id', '=', 2],
            ['jenis_kelamin', '=', 'Laki-laki'],
        ])->count();
        $jumlah_pasien_bta_minus_lelaki_persen = $jumlah_pasien_bta_minus_lelaki == 0 ? 0 : ($jumlah_pasien_bta_minus_lelaki / $jumlah_pasien_bta_minus) * 100;
        $jumlah_pasien_bta_minus_perempuan_persen = $jumlah_pasien_bta_minus_perempuan == 0 ? 0 : ($jumlah_pasien_bta_minus_perempuan / $jumlah_pasien_bta_minus) * 100;


        // EKSTRA PARU
        $jumlah_pasien_ekstra_paru = Pasien::where('jenis_penyakit_id', 3)->count();
        $jumlah_pasien_ekstra_paru_perempuan = Pasien::where([
            ['jenis_penyakit_id', '=', 3],
            ['jenis_kelamin', '=', 'Perempuan'],
        ])->count();
        $jumlah_pasien_ekstra_paru_lelaki = Pasien::where([
            ['jenis_penyakit_id', '=', 3],
            ['jenis_kelamin', '=', 'Laki-laki'],
        ])->count();
        $jumlah_pasien_ekstra_paru_lelaki_persen = $jumlah_pasien_ekstra_paru_lelaki == 0 ? 0 : ($jumlah_pasien_ekstra_paru_lelaki / $jumlah_pasien_ekstra_paru) * 100;
        $jumlah_pasien_ekstra_paru_perempuan_persen = $jumlah_pasien_ekstra_paru_perempuan == 0 ? 0 : ($jumlah_pasien_ekstra_paru_perempuan / $jumlah_pasien_ekstra_paru) * 100;
        

        // KAMBUH
        $jumlah_pasien_kambuh = Pasien::where('jenis_penyakit_id', 4)->count();
        $jumlah_pasien_kambuh_perempuan = Pasien::where([
            ['jenis_penyakit_id', '=', 4],
            ['jenis_kelamin', '=', 'Perempuan'],
        ])->count();
        $jumlah_pasien_kambuh_lelaki = Pasien::where([
            ['jenis_penyakit_id', '=', 4],
            ['jenis_kelamin', '=', 'Laki-laki'],
        ])->count();
        $jumlah_pasien_kambuh_lelaki_persen = $jumlah_pasien_kambuh_lelaki == 0 ? 0 : ($jumlah_pasien_kambuh_lelaki / $jumlah_pasien_kambuh) * 100;
        $jumlah_pasien_kambuh_perempuan_persen = $jumlah_pasien_kambuh_perempuan == 0 ? 0 : ($jumlah_pasien_kambuh_perempuan / $jumlah_pasien_kambuh) * 100;

        // DEFAULT
        $jumlah_pasien_default = Pasien::where('jenis_penyakit_id', 5)->count();
        $jumlah_pasien_default_perempuan = Pasien::where([
            ['jenis_penyakit_id', '=', 5],
            ['jenis_kelamin', '=', 'Perempuan'],
        ])->count();
        $jumlah_pasien_default_lelaki = Pasien::where([
            ['jenis_penyakit_id', '=', 5],
            ['jenis_kelamin', '=', 'Laki-laki'],
        ])->count();
        $jumlah_pasien_default_lelaki_persen = $jumlah_pasien_default_lelaki == 0 ? 0 : ($jumlah_pasien_default_lelaki / $jumlah_pasien_default) * 100;
        $jumlah_pasien_default_perempuan_persen = $jumlah_pasien_default_perempuan == 0 ? 0 : ($jumlah_pasien_default_perempuan / $jumlah_pasien_default) * 100;

        
        // GAGAL
        $jumlah_pasien_gagal = Pasien::where('jenis_penyakit_id', 6)->count();
        $jumlah_pasien_gagal_perempuan = Pasien::where([
            ['jenis_penyakit_id', '=', 6],
            ['jenis_kelamin', '=', 'Perempuan'],
        ])->count();
        $jumlah_pasien_gagal_lelaki = Pasien::where([
            ['jenis_penyakit_id', '=', 6],
            ['jenis_kelamin', '=', 'Laki-laki'],
        ])->count();
        $jumlah_pasien_gagal_lelaki_persen = $jumlah_pasien_gagal_lelaki == 0 ? 0 : ($jumlah_pasien_gagal_lelaki / $jumlah_pasien_gagal) * 100;
        $jumlah_pasien_gagal_perempuan_persen = $jumlah_pasien_gagal_perempuan == 0 ? 0 : ($jumlah_pasien_gagal_perempuan / $jumlah_pasien_gagal) * 100;


        // LAIN_LAIN
        $jumlah_pasien_lain = Pasien::where('jenis_penyakit_id', 7)->count();
        $jumlah_pasien_lain_perempuan = Pasien::where([
            ['jenis_penyakit_id', '=', 7],
            ['jenis_kelamin', '=', 'Perempuan'],
        ])->count();
        $jumlah_pasien_lain_lelaki = Pasien::where([
            ['jenis_penyakit_id', '=', 7],
            ['jenis_kelamin', '=', 'Laki-laki'],
        ])->count();
        $jumlah_pasien_lain_lelaki_persen = $jumlah_pasien_lain_lelaki == 0 ? 0 : ($jumlah_pasien_lain_lelaki / $jumlah_pasien_lain) * 100;
        $jumlah_pasien_lain_perempuan_persen = $jumlah_pasien_lain_perempuan == 0 ? 0 : ($jumlah_pasien_lain_perempuan / $jumlah_pasien_lain) * 100;

        $pasiens = Pasien::with([
            'kecamatan.kabupaten.provinsi',
        ])->get();

        $pasien_by_provinsi = $pasiens->groupBy('kecamatan.kabupaten.provinsi.name');
        $pasien_by_kabupaten = $pasiens->groupBy('kecamatan.kabupaten.name');

        // $pasien_by_kabupaten = array_multisort(array_map('count', $pasien_by_kabupaten->toArray()), SORT_DESC, $pasien_by_kabupaten->toArray());

        $sorted_pasien_by_provinsi = array_map(function($data){
            return array_keys($data);
        }, $pasien_by_provinsi->toArray());

        // dd(\gettype($pasien_by_provinsi));

        $number_pasien_provinsi = 0;
        $number_pasien_kabupaten = 0;
        $number_pasien_knn = 1;

        // dd($pasien_by_provinsi->toArray());

        return view('grafik.index', compact([
            // 'pasiens',
            'pasiens_pengobatan_ulang',

            'jumlah_pasien',

            'jumlah_pasien_baru',
            'jumlah_pasien_lama',

            'jumlah_pasien_perempuan',
            'jumlah_pasien_lelaki',

            'jumlah_pasien_bta_plus',
            'jumlah_pasien_bta_plus_lelaki',
            'jumlah_pasien_bta_plus_perempuan',
            'jumlah_pasien_bta_plus_lelaki_persen',
            'jumlah_pasien_bta_plus_perempuan_persen',

            'jumlah_pasien_bta_minus',
            'jumlah_pasien_bta_minus_lelaki',
            'jumlah_pasien_bta_minus_perempuan',
            'jumlah_pasien_bta_minus_lelaki_persen',
            'jumlah_pasien_bta_minus_perempuan_persen',

            'jumlah_pasien_ekstra_paru',
            'jumlah_pasien_ekstra_paru_lelaki',
            'jumlah_pasien_ekstra_paru_perempuan',
            'jumlah_pasien_ekstra_paru_lelaki_persen',
            'jumlah_pasien_ekstra_paru_perempuan_persen',

            'jumlah_pasien_kambuh',
            'jumlah_pasien_kambuh_lelaki',
            'jumlah_pasien_kambuh_perempuan',
            'jumlah_pasien_kambuh_lelaki_persen',
            'jumlah_pasien_kambuh_perempuan_persen',

            'jumlah_pasien_default',
            'jumlah_pasien_default_lelaki',
            'jumlah_pasien_default_perempuan',
            'jumlah_pasien_default_lelaki_persen',
            'jumlah_pasien_default_perempuan_persen',

            'jumlah_pasien_gagal',
            'jumlah_pasien_gagal_lelaki',
            'jumlah_pasien_gagal_perempuan',
            'jumlah_pasien_gagal_lelaki_persen',
            'jumlah_pasien_gagal_perempuan_persen',

            'jumlah_pasien_lain',
            'jumlah_pasien_lain_lelaki',
            'jumlah_pasien_lain_perempuan',
            'jumlah_pasien_lain_lelaki_persen',
            'jumlah_pasien_lain_perempuan_persen',

            'pasien_by_provinsi',
            'pasien_by_kabupaten',

            'number_pasien_provinsi',
            'number_pasien_kabupaten',
            'number_pasien_knn',

            'sorted_pasien_by_provinsi',
        ]));
    }
}