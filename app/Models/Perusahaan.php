<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    protected $table = "perusahaan";
    protected $fillable = [
        'id_perusahaan',
        'nama_perusahaan',
        'slogan',
        'no_telp',
        'alamat',
        'deskripsi',
        'email',
        'instagram',
        'gmaps',
        'tiktok',

    ];
}
