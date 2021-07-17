<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JadwalBelajar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwalbelajar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hari');
            $table->string('pengajar',30);
            $table->string('mata_pelajaran');
            $table->string('durasi_belajar');
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
        Schema::dropIfExists('jadwalbelajar');
    }
}
