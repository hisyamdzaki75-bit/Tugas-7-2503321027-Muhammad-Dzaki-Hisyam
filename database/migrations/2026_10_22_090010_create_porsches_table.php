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
    Schema::create('porsches', function (Blueprint $table) {
        $table->id();
        $table->string('nama_model'); // Contoh: Porsche 911 GT3 RS
        $table->string('kategori');   // Contoh: Coupe, SUV, Electric
        $table->bigInteger('harga');  // Contoh: 4500000000
        $table->integer('stok');      // Contoh: 3
        $table->text('deskripsi')->nullable();
        $table->string('gambar')->nullable(); // URL gambar mobil
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('porsches');
    }
};
