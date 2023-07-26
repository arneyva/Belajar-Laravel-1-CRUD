<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelmhs extends Model
{
    use HasFactory;
    // 08/12/22
    protected $table = 'mahas';
    protected $primaryKey = 'nim';
    public $timestamps = false;
}
