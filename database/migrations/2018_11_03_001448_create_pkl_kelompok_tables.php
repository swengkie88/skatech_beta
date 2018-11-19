<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePklKelompokTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkl_kelompok', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedInteger('id_jurusan');
            $table->foreign('id_jurusan')->references('id')->on('pkl_jurusan');

            $table->unsignedInteger('id_dudi');
            $table->foreign('id_dudi')->references('id')->on('pkl_dudi');
        
            $table->string('tahun');
            $table->integer('period')->index();
            $table->integer('verify_by_pj')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pkl_kelompok');
    }
}
