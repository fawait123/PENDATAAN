<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('det_aset', function (Blueprint $table) {
            $table->string('kd_det_aset');
            $table->enum('kondisi_awal',['Baik','Rusak']);
            $table->date('tgl_masuk');
            $table->string('ruang_asal');
            $table->enum('verifikasi',['Belum Verifikasi','Sudah Verifikasi']);
            $table->string('kd_aset');
            $table->string('kd_ruang');
            $table->string('kd_asal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('det_asets');
    }
};
