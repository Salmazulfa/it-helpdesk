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
        Schema::create('subdomains', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->nullable($value = false);
            $table->string('instansi');
            $table->string('nama_app');
            $table->string('deskripsi_app');
            $table->string('pengembang_app');
            $table->string('status_terintegrasi');
            $table->string('aplikasi_terintegrasi');
            $table->string('tgl_penggunaan');
            $table->string('subdomain');
            $table->string('info_server');
            $table->string('surat_permohonan')->nullable();
            $table->string('status');
            $table->date('tgl_antri');
            $table->date('tgl_proses');
            $table->date('tgl_selesai');
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
        Schema::dropIfExists('subdomains');
    }
};
