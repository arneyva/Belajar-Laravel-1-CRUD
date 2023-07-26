<?php

namespace App\Http\Controllers;
use App\Models\Modelmhs;
use Illuminate\Http\Request;

class Mhs extends Controller
{
    //08/12/22
    public function index()
    {
        $data=[
             'dataMhs' => Modelmhs::all()
        ];
        return View('mahasiswa.data',$data);
    }
}
