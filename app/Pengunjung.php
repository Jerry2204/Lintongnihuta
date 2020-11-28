<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    protected $table = 'pengunjung';
    protected $fillable = ['nama', 'alamat','komentar', 'informasi_id_informasi'];

    public function balasan_komentar()
    {
        return $this->hasMany(BalasKomentar::class);
    }

    public function informasi(){
        return $this->belongsTo(Informasi::class);
    }
}
