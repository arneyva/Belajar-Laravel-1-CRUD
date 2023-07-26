<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function index(){
        return view('halaman/index');
    }

    function profile(){
        return view('halaman/profile');
    }

    function detail(){
        return view('halaman/detail');
    }

    // dengan with berupa data biasa
    function kontak(){
        $judul = 'Ini adalah halaman Kontak';
       

        return view('halaman/kontak')->with('variabel',$judul);
        // nanti yang dipanggil di blade $variabel
    }

    // dengan with berupa data Array
    function kontak2(){
        $data = [
            'judul' => 'Ini adalah halaman Kontak2',
            'kontak' => [
                'email' => 'rajinnugas14@gmail.com',
                'insta' => 'wij.jpeg'
            ]
        ];
        // diblade varibaelnya jadi $judul dan $kontak, arraynya jadi [email],[insta]
        return view("halaman/kontak2")->with($data);
    }
}
