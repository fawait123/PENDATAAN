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
        Schema::create('det_mutasi', function (Blueprint $table) {
            $table->string('kd_det_mutasi');
            $table->string('tgl_mutasi');
            $table->string('ruang_mutasi');
            $table->enum('verifikasi',['Belum Verifikasi','Sudah Verifikasi']);
            $table->text('keterangan');
            $table->string('kd_det_aset');
            $table->string('kd_mutasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('det_mutasis');
    }
};
