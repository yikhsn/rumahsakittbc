<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    public function desas()
    {
        return $this->hasMany('App\Models\Desa');
    }

    public function kabupaten()
    {
        return $this->belongsTo('App\Models\Kabupaten');
    }

    public function rumahsakits()
    {
        return $this->hasMany('App\Models\RumahSakit');
    }

    public function pendampings()
    {
        return $this->hasMany('App\Models\Pendamping');
    }

    public function dokters(){
        return $this->hasMany('App\Models\Dokter');
    }

    public function pasiens(){
        return $this->hasMany('App\Models\Pasien');
    }
    
}