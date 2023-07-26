<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    // public $timestamps = false;
    use HasFactory;
    protected $table = "siswa";
    // protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'alamat', 'kota', 'provinsi', 'email'
];
}
