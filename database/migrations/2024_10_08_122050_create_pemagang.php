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
        Schema::create('pemagang', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id')->nullable(); //fk from user
            $table->string('nama_pemagang');
            $table->date('ttl_pemagang');
            $table->string('telp_pemagang');
            $table->unsignedBigInteger('asal_lembaga_pemagang')->nullable(); //fk from lembaga
            $table->string('jurusan');
            $table->unsignedBigInteger('guru_pembimbing')->nullable(); //fk from pembimbing
            $table->unsignedBigInteger('pembimbing_lapangan')->nullable(); //fk from pembimbing
            $table->date('awal_magang');
            $table->date('akhir_magang');
            $table->enum('status', ['Aktif', 'Tidak Aktif']);
            $table->string('foto_pemagang')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemagang');
    }
};
