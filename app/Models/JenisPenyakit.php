<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisPenyakit extends Model
{
    public function pasiens()
    {
        return $this->hasMany('App\Models\Pasien');
    }

    public function evaluasis()
    {
        return $this->hasMany('App\Models\Evaluasi');
    }
}
