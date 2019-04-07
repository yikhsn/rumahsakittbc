<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    public function kecamatan()
    {
        return $this->belongsTo('App\Models\Kecamatan');
    }

    public function rumah_sakit()
    {
        return $this->belongsTo('App\Models\RumahSakit');
    }

    public function dokter()
    {
        return $this->belongsTo('App\Models\Dokter');
    }

    public function pendamping()
    {
        return $this->belongsTo('App\Models\Pendamping');
    }

    public function jenis_penyakit()
    {
        return $this->belongsTo('App\Models\JenisPenyakit');
    }

    public function type_pasien()
    {
        return $this->belongsTo('App\Models\JenisPenyakit');
    }
}