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
        Schema::create('posts', function (Blueprint $table) {
        $table->id(); // ID unik artikel [cite: 48]
        $table->string('title'); // Judul berita [cite: 48]
        $table->string('slug')->unique(); // URL ramah SEO [cite: 48]
        $table->text('content'); // Isi lengkap berita [cite: 49]
        $table->string('image')->nullable(); // Foto dokumentasi [cite: 49]
        $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Hubungan ke admin pembuat berita [cite: 49]
        $table->timestamps(); // Waktu rilis berita [cite: 49]
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
