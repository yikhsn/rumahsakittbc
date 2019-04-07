<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    public function kecamatans()
    {
        return $this->hasMany('App\Models\Kecamatan');
    }
    public function provinsi()
    {
        return $this->belongsTo('App\Models\Provinsi');
    }
}
