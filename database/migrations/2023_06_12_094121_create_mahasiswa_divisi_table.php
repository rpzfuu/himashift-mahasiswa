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
        Schema::create('mahasiswa_divisi', function (Blueprint $table) {
            $table->string('nim', 9);
            $table->string('id_divisi');
            $table->primary(['nim', 'id_divisi']);
            $table->foreign('nim')->references('nim')->on('mahasiswa')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_divisi')->references('id_divisi')->on('divisi')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa_divisi');
    }
};