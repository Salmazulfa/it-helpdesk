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
        Schema::create('pembuatan_apps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->nullable($value = false);
            $table->string('instansi');
            $table->string('latarbelakang');
            $table->string('nama_app');
            $table->string('deskripsi_app');
            $table->string('status_terintegrasi');
            $table->string('aplikasi_terintegrasi');
            $table->string('kebutuhan_fitur');
            $table->string('tgl_penggunaan');
            $table->string('proses_bisnis')->nullable();
            $table->string('surat_permohonan')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('pembuatan_apps');
    }
};
