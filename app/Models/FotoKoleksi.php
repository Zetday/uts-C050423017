<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoKoleksi extends Model
{
    use HasFactory;

    protected $table = 'foto_koleksi';

    protected $fillable = [
        'id_koleksi',
        'url_foto',
        'keterangan_foto'
    ];

    // Relasi ke koleksi (many-to-one)
    public function koleksi()
    {
        return $this->belongsTo(Koleksi::class, 'id_koleksi');
    }
}
