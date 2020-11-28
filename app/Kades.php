<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kades extends Model
{
    protected $table = 'kades';
    protected $fillable = ['nama', 'tanggal_lahir', 'jenis_kelamin', 'foto', 'kades_id'];

    public function sekdes(){
        return $this->hasOne(Sekdes::class);
    }
}
