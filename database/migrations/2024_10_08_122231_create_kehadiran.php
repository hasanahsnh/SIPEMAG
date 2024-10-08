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
        Schema::create('kehadiran', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slug');
            $table->unsignedBigInteger('pemagang_id')->nullable(); //fk from pemagang
            $table->timestamp('checkin')->nullable();
            $table->timestamp('checkout')->nullable();
            $table->unsignedBigInteger('location_id')->nullable(); //fk from location
            $table->date('tgl_kehadiran');
            $table->enum('status_kehadiran', ['Hadir', 'Terlambat']);
            $table->text('alasan')->nullable();
            $table->boolean('modified_by_admin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kehadiran');
    }
};
