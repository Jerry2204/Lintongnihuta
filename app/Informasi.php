<?php

namespace App;

use App\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Informasi extends Model
{
    protected $table = 'informasi';
    protected $fillable = ['judul_info', 'isi_info', 'gambar_info', 'category_id', 'admin_id'];
    protected $primaryKey = 'id_informasi';

    public function pengunjung(){
        return $this->hasMany(Pengunjung::class);
    }

    public function admin(){
        return $this->belongsTo(Admin::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
