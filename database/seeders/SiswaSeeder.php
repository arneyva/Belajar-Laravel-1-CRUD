<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// penting
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        // \App\Models\siswa::factory(100)->create();
        \App\Models\siswa::factory(100)->create();

        // \App\Models\User::factory(100)->create([
        //     'name' => 'Test User',
        //     'alamat' => 'Magelang',
        //     'no_hp' => '08967751805'
        // ]);

        // // data pertama
        // DB::table('siswa')->insert([
            
        //     'nama' => 'Wijdan',
        //     'alamat' => 'Magelang',
        //     'nomor_hp' => '089677518050',
        //     'id' => '1'
            
        // ]);

        // // data kedua
        // DB::table('siswa')->insert([
            
        //     'nama' => 'Arif',
        //     'alamat' => 'Magelang',
        //     'nomor_induk' => '089677518051',
        //     'id' => '2'
            
        // ]);
        
        // // data ketiga
        // DB::table('siswa')->insert([
           
        //     'nama' => 'luna',
        //     'alamat' => 'Magelang',
        //     'nomor_induk' => '089677518053',
        //     'id' => '3'
            
        // ]);
    }
}
