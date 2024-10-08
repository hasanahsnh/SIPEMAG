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
        Schema::create('ketidakhadiran', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slug');
            $table->unsignedBigInteger('pemagang_id')->nullable(); //fk from pemagang
            $table->enum('tipe_izin', ['Izin pribadi', 'Sakit']);
            $table->text('alasan');
            $table->date('tgl_pengajuan');
            $table->enum('persetujuan', ['Disetujui', 'Menunggu'])->default('Menunggu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ketidakhadiran');
    }
};
