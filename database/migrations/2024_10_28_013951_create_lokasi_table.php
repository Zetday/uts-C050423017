<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokasiTable extends Migration
{
    public function up()
    {
        Schema::create('lokasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lokasi', 100);
            $table->text('deskripsi_lokasi')->nullable();
            $table->integer('lantai')->nullable();
            $table->string('ruangan', 50)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lokasi');
    }
}
