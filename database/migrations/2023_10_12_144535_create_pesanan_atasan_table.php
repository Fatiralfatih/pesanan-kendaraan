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
        Schema::create('pesanan_atasan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('atasan_id');
            $table->foreign('atasan_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreignId('pesanan_id')->constrained()->cascadeOnDelete();
            $table->boolean('confirmed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan_atasan');
    }
};
