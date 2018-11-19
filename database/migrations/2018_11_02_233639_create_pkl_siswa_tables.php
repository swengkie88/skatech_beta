<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePklSiswaTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkl_siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');

            $table->string('nama')->nullable();

            $table->unsignedInteger('id_jurusan')->nullable();
            $table->foreign('id_jurusan')->references('id')->on('pkl_jurusan');
           

            $table->string('kelas')->nullable();
            $table->mediumText('alamat')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->text('image')->nullable();

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
        Schema::dropIfExists('pkl_siswa');
    }
}
