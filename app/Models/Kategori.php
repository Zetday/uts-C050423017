<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    protected $fillable = [
        'nama_kategori',
        'deskripsi'
    ];

    // Relasi ke koleksi (one-to-many)
    public function koleksi()
    {
        return $this->hasMany(Koleksi::class, 'id_kategori');
    }
}
