<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPengumuman extends Model
{
    protected $table='kategori_pengumuman';

    protected $fillable=[
    'nama', 'user_id'
    ];

    public function pengumuman(){
        return $this->belongsTo(\App\Pengumuman::class, 'kategori_pengumuman_id', 'id');
    }

    public function user(){
        return $this->belongsTo(\App\User::class, 'user_id', 'id');

    }

}
