<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    protected $table = 'lokasi';

    protected $fillable = [
        'nama_lokasi',
        'deskripsi_lokasi',
        'lantai',
        'ruangan'
    ];

    // Relasi ke koleksi (one-to-many)
    public function koleksi()
    {
        return $this->hasMany(Koleksi::class, 'id_lokasi');
    }
}