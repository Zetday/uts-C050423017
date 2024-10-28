<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koleksi extends Model
{
    use HasFactory;

    protected $table = 'koleksi';

    protected $fillable = [
        'nama_koleksi',
        'deskripsi',
        'tahun_perolehan',
        'asal_usul',
        'kondisi',
        'id_kategori',
        'id_lokasi'
    ];

    // Relasi ke kategori (many-to-one)
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    // Relasi ke lokasi (many-to-one)
    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class, 'id_lokasi');
    }

    // Relasi ke perawatan (one-to-many)
    public function perawatan()
    {
        return $this->hasMany(Perawatan::class, 'id_koleksi');
    }

    // Relasi ke foto koleksi (one-to-many)
    public function fotoKoleksi()
    {
        return $this->hasMany(FotoKoleksi::class, 'id_koleksi');
    }
}
