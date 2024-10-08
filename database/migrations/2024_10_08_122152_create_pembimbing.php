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
        Schema::create('pembimbing', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slug');
            $table->unsignedBigInteger('pemagang_id')->nullable(); //fk from pemagang
            $table->string('nip');
            $table->string('nama_pembimbing');
            $table->enum('role', ['Guru pembimbing', 'Pembimbing lapangan']);
            $table->string('telp_pembimbing');
            $table->unsignedBigInteger('asal_lembaga')->nullable(); //fk from lembaga
            $table->string('jabatan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembimbing');
    }
};
