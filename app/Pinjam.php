<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    protected $table = 'pinjam';
    protected $fillable = ['anggota_id','buku_id','tanggal_pinjam','tanggal_pengembalian'];

    public function anggota()
    {
        return $this->belongsTo('App\Anggota');
    }

    public function buku()
    {
        return $this->belongsTo('App\Buku');
    }
}