<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluasi extends Model
{
    public function pasiens()
    {
        return $this->hasMany('App\Models\Pasien');
    }

    public function jenis_penyakit()
    {
        return $this->belongsTo('App\Models\JenisPenyakit');
    }
}
