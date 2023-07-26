<?php

namespace Database\Seeders;

// jangan lupa tambhkan ini
use App\Models\Mahasiswa;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //disini kita tentukan berapa jumlah banyak dummy yang akan dibuat
        Mahasiswa::factory(100)->create();
    }
}
