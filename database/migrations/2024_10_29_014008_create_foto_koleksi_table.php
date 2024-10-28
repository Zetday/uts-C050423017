<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoKoleksiTable extends Migration
{
    public function up()
    {
        Schema::create('foto_koleksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_koleksi')->constrained('koleksi')->onDelete('cascade');
            $table->string('url_foto', 255);
            $table->text('keterangan_foto')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('foto_koleksi');
    }
}
