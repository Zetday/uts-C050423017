<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuratorTable extends Migration
{
    public function up()
    {
        Schema::create('kurator', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kurator', 100);
            $table->string('spesialisasi', 100)->nullable();
            $table->string('kontak', 50)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kurator');
    }
}
