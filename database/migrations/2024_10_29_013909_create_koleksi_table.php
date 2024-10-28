<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKoleksiTable extends Migration
{
    public function up()
    {
        Schema::create('koleksi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_koleksi', 255);
            $table->text('deskripsi')->nullable();
            $table->year('tahun_perolehan')->nullable();
            $table->string('asal_usul', 255)->nullable();
            $table->string('kondisi', 50)->nullable();
            $table->foreignId('id_kategori')->constrained('kategori')->onDelete('cascade');
            $table->foreignId('id_lokasi')->constrained('lokasi')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('koleksi');
    }
}
