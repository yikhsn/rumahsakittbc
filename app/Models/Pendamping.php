<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendamping extends Model
{
    protected $primaryKey = 'nik';

    protected $fillable = [
        'nama',
        'usia',
        'nik',
        'no_telepon',
        'hubungan_pasien',
        'jenis_kelamin',
        'agama',
        'alamat',
        'kecamatan_id',
    ];

    public function kecamatan()
    {
        return $this->belongsTo('App\Models\Kecamatan');
    }

    public function pasiens()
    {
        return $this->hasMany('App\Models\Pasien');
    }
}
