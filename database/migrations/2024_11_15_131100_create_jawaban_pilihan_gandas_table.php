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
        Schema::create('jawaban_pilihan_ganda', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pilihan_ganda');
            $table->unsignedBigInteger('id_data_diri');
            $table->char('jawaban', 1);
            $table->boolean('benar');
            $table->timestamps();

            $table->foreign('id_pilihan_ganda')->references('id')->on('pilihan_ganda')->onDelete('cascade');
            $table->foreign('id_data_diri')->references('id')->on('data_diri')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jawaban_pilihan_ganda');
    }
};
