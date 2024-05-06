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
            'slogan' => 'Belum ada',
            'no_telp' => '1234567890',
            'alamat' => 'Jl. Test',
            'deskripsi' => 'ckptw',
            'email' => 'perusahaan@example.com',
            'instagram' => 'perusahaan_instagram',
            'gmaps' => 'https://maps.google.com/perusahaan',
            'tiktok' => 'perusahaan_tiktok',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
