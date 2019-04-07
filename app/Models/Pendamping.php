<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendamping extends Model
{
    public function kecamatan()
    {
        return $this->belongsTo('App\Models\Kecamatan');
    }

    public function pasiens()
    {
        return $this->hasMany('App\Models\Pasien');
    }
}
