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
        Schema::create('respon', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_laporan')->constrained('laporan')->cascadeOnDelete();
            $table->string('isi_respon');
            $table->datetime('tanggal_respon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respon');
    }
};
