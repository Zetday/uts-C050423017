<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawatan extends Model
{
    use HasFactory;

    protected $table = 'perawatan';

    protected $fillable = [
        'id_koleksi',
        'tanggal_perawatan',
        'deskripsi_perawatan',
        'petugas_perawatan'
    ];

    // Relasi ke koleksi (many-to-one)
    public function koleksi()
    {
        return $this->belongsTo(Koleksi::class, 'id_koleksi');
    }
}
