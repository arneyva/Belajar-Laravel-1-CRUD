<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function index(){
      //  return "<h3>Saya adalah siswa dari Controller </h3>";  

      // cara pertama 
      // $data = siswa :: all();

      // dengan menggunakan orderBy, bisa diurutkan secara asc dan desc

      // tabel nama dari A-Z
      // $data = siswa :: orderBy('nama','asc')->get();

      // tabel nama dari Z-A
      // $data = siswa :: orderBy('nama','desc')->get();

      // $data = siswa :: orderBy('nomor_induk','desc')->get();

      // menggunakan paginate
      // $data = siswa :: orderBy('email','desc')->paginate(10);
      // return view('mahasiswa/data')->with('data', $data);
    }

    function detail($id){
        // return "<h3>Saya adalah siswa dari Controller dengan ID $id </h3>"; 
        // $data = siswa::where ('email',$id)->first();
        // return view('mahasiswa/show')->with('data', $data);
     }
}
