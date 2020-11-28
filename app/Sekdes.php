<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekdes extends Model
{
    protected $table = 'sekdes';
    protected $fillable = ['nama', 'tanggal_lahir', 'jenis_kelamin', 'foto', 'kades_id'];

    public function kades(){
        return $this->belongsTo(Kades::class);
    }
}
