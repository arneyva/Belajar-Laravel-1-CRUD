<?php

use App\Http\Controllers\CRUDMahasiswa_Controller;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\Mhs;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ketika 127.0.0.1:8000/ di start maka yang ditampilkan di browser adalah welcome.blade.php
// gunakan untuk menampilkan index
// Route::get('/', function () {
//     return view('welcome',
// [
//     'name' => 'Wijdan Arif'
// ]);
// });

// membuat route 127.0.0.1:8000/data untuk menampilkan data.blade.php didalam folder mahasiswa
// Route::get('/data',function(){
//     return view('mahasiswa/data');
// });

//route tidak hanya bisa untuk mereturn view,tapi juga tulisan
Route::get('/siswa',function(){
    return "<h3>Saya siswa <h3>";
});

//route tidak hanya bisa untuk mereturn view,tapi juga tulisan + parameter + diabatasi 
Route::get('/siswa/{nama}',function($nama){
    return "<h3>Saya siswa  dengan Nama $nama <h3>";
})->where('nama','[A-Z,a-z]+');

//route tidak hanya bisa untuk mereturn view,tapi juga tulisan + 2 parameter + kedua paramater sama sama dibatasi dengan (huruf,angka)
Route::get('/siswa/{nama}/{umur}',function($nama,$umur){
    return "<h3>Saya siswa  dengan Nama $nama Umur $umur Tahun <h3>";
})->where(['nama' => '[A-Z,a-z]+', 'umur' => '[0-9]+']); 

// php artisan route:list => untuk melihat route yang telah dibuat
// php artisan make:controller SiswaController => untuk membuat controller

// membuat route  dari controller
// ketika 127.0.0.1:8000/siswacon maka akan menampilkan function index yang berada di Siswacontroller
// Route::get('siswacon',[SiswaController::class, 'index']);
// Route::get('siswacon/{id}',[SiswaController::class, 'detail'])->where('id','[0-9]+');


// template cyborg
Route::get('/',[HalamanController::class, 'index']);
Route::get('/profile',[HalamanController::class, 'profile']);
Route::get('/detail',[HalamanController::class, 'detail']);
Route::get('/kontak',[HalamanController::class, 'kontak']);
Route::get('/kontak2',[HalamanController::class, 'kontak2']);




// 08/12/22
 Route::controller(Mhs::class)->group(function () {
      Route::get('/mhs/index', 'index');    
 });
//  Route::resource('products', ProductController::class);
 Route::resource('siswacon', CRUDMahasiswa_Controller::class);
