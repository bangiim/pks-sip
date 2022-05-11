<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $fillable = ['nama','jeniskelamin','tanggallahir','alamat','email','telp'];

    public function pinjam()
    {
        return $this->hasMany('App\Pinjam');
    }
}
