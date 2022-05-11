<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $fillable = ['judul','edisi','penerbit','tahun','penulis_id','kategori_id'];

    public function kategori()
    {
        return $this->belongsTo('App\Kategori');
    }

    public function penulis()
    {
        return $this->belongsTo('App\Penulis');
    }

    public function buku()
    {
        return $this->hasMany('App\Buku');
    }
}
