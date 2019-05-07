<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $fillable = [
        'nama',
        'usia',
        'agama',
        'nik',
        'no_telepon',
        'alamat',
        'kecamatan_id',
        'type_id',
        'jenis_penyakit_id',
        'pendamping_id',
        'dokter_id',
        'rumahsakit_id'
    ];

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
}