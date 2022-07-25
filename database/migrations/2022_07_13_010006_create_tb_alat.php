<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAlat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_alat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang',255);
            $table->string('type',255);
            $table->string('jumlah_barang',255);
            $table->integer('tahun_barang');
            $table->string('kondisi',255);
            $table->string('tempat_barang',255);
            $table->string('image',255)->nullable();
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
        Schema::dropIfExists('alat_models');
    }
}
