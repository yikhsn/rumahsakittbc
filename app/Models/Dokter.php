<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $fillable = [
        'nama',
        'usia',
        'agama',
        'nik',
        'no_telepon',
        'alamat',
        'kecamatan_id',
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

    public function pasiens()
    {
        return $this->hasMany('App\Models\Pasien');
    }
}
