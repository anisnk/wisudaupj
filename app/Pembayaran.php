<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $fillable = ['user_id', 'nama_bank', 'no_rek', 'atas_nama', 'image', 'verifikasi'];
    protected $table = 'Pembayaran';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
