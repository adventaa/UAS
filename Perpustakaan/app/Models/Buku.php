<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function peminjaman() {
        return $this->hasMany(peminjaman::class,'id_buku');
    }

    function kategori() {
        return $this->belongsTo(Ketegori::class,'id_kategori');
    }
}
