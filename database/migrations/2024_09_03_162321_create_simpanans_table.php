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
        Schema::create('simpanans', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor');
            $table->string('jenis_simpanan');
            $table->bigInteger('awal_angsuran');
            $table->bigInteger('akhir_angsuran');
            $table->bigInteger('nominal_pengajuan');
            $table->bigInteger('nominal_disetujui');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('simpanans');
    }
};
