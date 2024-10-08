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
        Schema::create('konsultasi', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slug');
            $table->unsignedBigInteger('pemagang_id')->nullable(); //fk from pemagang
            $table->unsignedBigInteger('pembimbing_id')->nullable(); //fk from pembimbing
            $table->date('tgl_pengajuan');
            $table->longText('pesan_konsultasi');
            $table->longText('balasan_pembimbing');
            $table->enum('persetujuan', ['Disetujui', 'Menunggu']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsultasi');
    }
};
