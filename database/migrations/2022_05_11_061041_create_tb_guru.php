<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbGuru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_guru', function (Blueprint $table) {
            $table->id();
            $table->string('nama',255);
            $table->string('tempat_lahir',255);
            $table->date('tanggal_lahir');
            $table->string('nip',225);
            $table->string('golongan',255);
            $table->string('pendidikan',255);
            $table->string('bidang_studi',255);
            $table->string('keterangan',255);
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
        Schema::dropIfExists('tb_guru');
    }
}
