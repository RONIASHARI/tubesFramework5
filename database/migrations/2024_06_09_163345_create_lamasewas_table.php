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
        Schema::create('lamasewas', function (Blueprint $table) {
            $table->id();
            $table->string('namasewa');  // Kolom untuk Nama Sewa Harian
            $table->integer('durasi');  // Kolom untuk Durasi sewa dalam hari
            $table->text('keterangan');  // Kolom untuk Keterangan tambahan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lamasewas');
    }
};
