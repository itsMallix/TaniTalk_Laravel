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
        Schema::create('tabel_formulasi', function (Blueprint $table) {
            $table->id();
            $table->String('nama_pupuk');
            $table->String('bentuk');
            $table->String('warna');
            $table->String('deskripsi');
            $table->String('manfaat');
            $table->String('kemasan');
            $table->String('penggunaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_formulasi');
    }
};
