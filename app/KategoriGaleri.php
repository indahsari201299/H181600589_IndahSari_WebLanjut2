<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    protected $table='kategori_galeri';

    protected $fillable=[
    'nama', 'user_id'
    ];

    public function galeri(){
        return $this->belongsTo(\App\Galeri::class, 'kategori_galei_id', 'id');
    }

    public function user(){
        return $this->belongsTo(\App\User::class, 'user_id', 'id');

    }

}
