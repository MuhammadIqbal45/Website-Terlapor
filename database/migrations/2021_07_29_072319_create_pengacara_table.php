<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengacaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengacara', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pengacara');
            $table->string('kota_pengacara');
            $table->string('kontak_pengacara');
            $table->string('foto');
            $table->string('uraian');
            $table->string('ttl');
            $table->string('kelamin');
            $table->string('riwayatpengalaman');
            $table->string('perusahaan');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengacara');
    }
}
