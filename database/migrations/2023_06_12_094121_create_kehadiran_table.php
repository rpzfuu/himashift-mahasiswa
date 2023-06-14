<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kehadiran', function (Blueprint $table) {
            $table->string('nim', 9);
            $table->unsignedBigInteger('id_absen');
            $table->string('status_kehadiran', 15);
            $table->primary(['nim', 'id_absen']);
            $table->foreign('nim')->references('nim')->on('mahasiswa')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_absen')->references('id_absen')->on('absen')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
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