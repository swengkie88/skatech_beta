<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePklPjJurusanTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkl_pj_jurusan', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_jurusan')->nullable();
            $table->foreign('id_jurusan')->references('id')->on('pkl_jurusan');

            $table->string('username');
            $table->string('password');
            $table->string('nama')->nullable();
            $table->integer('phone')->nullable();
            
            $table->rememberToken();
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
        Schema::dropIfExists('pkl_pj_jurusan');
    }
}
