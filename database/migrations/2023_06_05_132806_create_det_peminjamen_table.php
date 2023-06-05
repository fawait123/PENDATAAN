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
        Schema::create('det_peminjaman', function (Blueprint $table) {
            $table->string('kd_det_peminjaman');
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->enum('verifikasi',['Belum Verifikasi','Sudah Verifikasi']);
            $table->text('keterangan');
            $table->string('kd_peminjaman');
            $table->string('kd_det_aset');
            $table->date('tgl_pengembalian');
            $table->enum('status',['Pinjam','Kembali']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('det_peminjamen');
    }
};
