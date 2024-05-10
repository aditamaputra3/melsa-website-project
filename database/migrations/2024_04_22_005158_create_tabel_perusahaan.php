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
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string('id_perusahaan', 50);
            $table->string('nama_perusahaan',50);
            $table->string('slogan');
            $table->string('no_telp');
            $table->string('alamat');
            $table->text('deskripsi');
            $table->string('email');
            $table->string('instagram');
            $table->string('gmaps');
            $table->string('tiktok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_perusahaan');
    }
};
