<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perusahaan')->insert([
            'id_perusahaan' => 1,
            'nama_perusahaan' => 'Melsa Group',
            'slogan' => 'gtw',
            'no_telp' => '1234',
            'alamat' => 'Jl',
            'deskripsi' => 'ckptw',
            'email' => 'example.com',
            'instagram' => 'perusahaan_instagram',
            'gmaps' => 'https',
            'tiktok' => 'perus',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
