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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('id_produk',50)->unique();
            $table->string('nama_produk');
            $table->decimal('harga_produk', 10, 2); // Kolom untuk harga dengan 2 angka di belakang koma
            $table->string('foto_produk');
            $table->text('deskripsi_produk');
            $table->string('id_kategori', 50);
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori');
            $table->string('updatedby')->nullable();
            $table->foreign('updatedby')->references('id_pengguna')->on('pengguna')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_produk');
    }
};
