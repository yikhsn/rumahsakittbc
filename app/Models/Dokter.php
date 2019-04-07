<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    public function kecamatan()
    {
        return $this->belongsTo('App\Models\Kecamatan');
    }

    public function rumahsakit()
    {
        return $this->belongsTo('App\Models\RumahSakit');
    }

    public function pasiens()
    {
        return $this->hasMany('App\Models\Pasien');
    }
}
