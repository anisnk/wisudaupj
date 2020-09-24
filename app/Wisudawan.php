<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisudawan extends Model
{
    protected $guarded = [];
    protected $table = 'wisudawan';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }

}
