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
        Schema::table('perusahaan', function (Blueprint $table) {
            $table->string('nama_perusahaan', 50)->nullable()->change();
            $table->string('slogan')->nullable()->change();
            $table->string('no_telp')->nullable()->change();
            $table->string('alamat')->nullable()->change();
            $table->text('deskripsi')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('instagram')->nullable()->change();
            $table->string('gmaps')->nullable()->change();
            $table->string('tiktok')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
