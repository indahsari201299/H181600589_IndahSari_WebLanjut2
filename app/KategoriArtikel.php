<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    protected $table='kategori_artikel';

    protected $fillable=[
    'nama', 'user_id'
    ];

    public function kategoriArtikel(){
        return $this->belongsTo(\App\Artikel::class, 'kategori_artikel_id', 'id');
    }

    public function user(){
        return $this->belongsTo(\App\User::class, 'user_id', 'id');

    }
}
