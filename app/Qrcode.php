<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qrcode extends Model
{
    protected $guarded = [];
    protected $table = 'Qrcode';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
