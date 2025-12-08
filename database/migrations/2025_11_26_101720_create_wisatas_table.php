<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('wisatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wisata');
            $table->text('deskripsi');
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_negara');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wisatas');
        Schema::dropIfExists('category');
    }
};