<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerawatanTable extends Migration
{
    public function up()
    {
        Schema::create('perawatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_koleksi')->constrained('koleksi')->onDelete('cascade');
            $table->date('tanggal_perawatan');
            $table->text('deskripsi_perawatan')->nullable();
            $table->string('petugas_perawatan', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('perawatan');
    }
}
