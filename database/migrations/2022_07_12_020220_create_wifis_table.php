<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wifis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->nullable($value = false);
            $table->string('penanggungjawab');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('rw');
            $table->string('kategori');
            $table->string('deskripsi');
            $table->string('status');
            $table->string('tgl_antri');
            $table->string('tgl_proses');
            $table->string('tgl_selesai');
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
        Schema::dropIfExists('wifis');
    }
};
