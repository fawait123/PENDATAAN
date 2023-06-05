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
        Schema::create('det_penghapusan', function (Blueprint $table) {
            $table->string('kd_det_penghapusan');
            $table->date('tgl_penghapusan');
            $table->enum('kondisi_akhir',['Baik','Rusak']);
            $table->enum('verifikasi',['Sudah Verifikasi','Belum Verifikasi']);
            $table->text('keterangan');
            $table->string('kd_det_aset');
            $table->string('kd_penghapusan');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('det_penghapusans');
    }
};
