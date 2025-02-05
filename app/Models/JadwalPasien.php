<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalPasien extends Model
{
    protected $fillable = [
        'nama_jadwal',
        'start',
        'end',
        'color',
        'is_done',
        'is_failed',
        'pasien_id'
    ];

    public function pasien()
    {
        return $this->belongsTo('App\Models\Pasien');
    }
}
