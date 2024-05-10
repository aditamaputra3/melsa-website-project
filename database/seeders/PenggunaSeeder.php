<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengguna')->insert([
            'id_pengguna' => 1,
            'nama_admin' => 'Adi',
            'username' => 'admin',
            'password' => bcrypt('123'), // Mengenkripsi password dengan Bcrypt
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
