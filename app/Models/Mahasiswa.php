<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{   
    use HasFactory;
    // disini kita setting

    // kita tentukan dummy akan masuk ke tabel mahasiswa
    protected $table = 'mahasiswas';

    // kita tentukan dummy akan mengisi kolom nama,alamat,kota,provinsi,dan email dari tabel mahasiswas
    protected $fillable = [
        'nama', 'alamat', 'kota', 'provinsi', 'email'
];
}
