<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePklDetailKelompokTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkl_detail_kelompok', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_kelompok');
            $table->foreign('id_kelompok')->references('id')->on('pkl_kelompok');

            $table->unsignedInteger('id_siswa');
            $table->foreign('id_siswa')->references('id')->on('pkl_siswa');    

            $table->integer('acc')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pkl_detail_kelompok');
    }
}
