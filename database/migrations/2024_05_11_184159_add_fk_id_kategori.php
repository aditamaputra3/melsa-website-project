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
        Schema::table('produk', function (Blueprint $table) {
            $table->unsignedBigInteger('id_kategori')->after('harga_produk'); ;
            $table->foreign('id_kategori')->references('id')->on('kategori');

            $table->string('jenis_produk')->after('id_kategori');   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produk', function (Blueprint $table) {
            // Hapus foreign key constraint
            $table->dropForeign(['id_kategori']);
            
            // Hapus kolom jenis_produk
            $table->dropColumn('jenis_produk');
        });
    }
};
