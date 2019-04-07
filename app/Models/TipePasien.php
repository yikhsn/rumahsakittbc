<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipePasien extends Model
{
    public function pasiens()
    {
        return $this->hasMany('App\Models\Pasien');
    }
}
