<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $table = 'Fakultas';

    public function prodi()
    {
        return $this->hasMany(Prodi::class, 'prodi_id');
    }
}

