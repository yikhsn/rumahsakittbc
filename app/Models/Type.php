<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function pasiens()
    {
        return $this->hasMany('App\Models\Pasien');
    }

    public function jenis_penyakits()
    {
        return $this->hasMany('App\Models\JenisPenyakit');
    }
}
