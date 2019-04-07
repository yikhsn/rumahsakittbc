<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
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
