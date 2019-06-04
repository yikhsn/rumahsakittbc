<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $fillable = [
        'nama',
        'agama',
        'nik',
        'no_telepon',
        'alamat',
        'tempat_lahir',
        'jenis_kelamin',
        'tanggal_lahir',
        'email',
        'password',
        'hasil_sputum',
        'jumlah_sputum',
        'pengobatan_satu_bulan',
        'catatan_kesehatan',
        'kecamatan_id',
        'type_id',
        'jenis_penyakit_id',
        'evaluasi_id',
        'pendamping_nik',
        'dokter_id',
        'rumahsakit_id',
    ];

    protected $dates = ['tanggal_lahir'];

    public function kecamatan()
    {
        return $this->belongsTo('App\Models\Kecamatan');
    }

    public function rumahsakit()
    {
        return $this->belongsTo('App\Models\Rumahsakit');
    }

    public function dokter()
    {
        return $this->belongsTo('App\Models\Dokter');
    }

    public function pendamping()
    {
        return $this->belongsTo('App\Models\Pendamping');
    }

    public function jenis_penyakit()
    {
        return $this->belongsTo('App\Models\JenisPenyakit');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }

    public function evaluasi()
    {
        return $this->belongsTo('App\Models\Evaluasi');
    }
}