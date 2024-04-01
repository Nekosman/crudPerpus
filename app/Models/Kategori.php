<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $fillable = [
        'nama_kategori',
        'deskripsi',
    ];

    public function bukus()
    {
        return $this->hasMany(Buku::class, 'id_kategori');
    }
}