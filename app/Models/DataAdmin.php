<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAdmin extends Model
{
    use HasFactory;
    protected $table = "data_pengguna";
    protected $fillable = [
        'id_perusahaan',
        'nama_admin',
        'sandi_pengguna',
        'peran_pengguna',
    ];
}
