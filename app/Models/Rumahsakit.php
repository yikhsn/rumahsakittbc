<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rumahsakit extends Model
{
    protected $fillable = [
        'no_rumahsakit',
        'nama',
        'no_telepon',
        'alamat',
        'kecamatan_id',
    ];

    public function kecamatan()
    {
        return $this->belongsTo('App\Models\Kecamatan');
    }

    public function dokters()
    {
        return $this->hasMany('App\Models\Dokter');
    }

    public function pasiens()
    {
        return $this->hasMany('App\Models\Pasien');
    }
}
