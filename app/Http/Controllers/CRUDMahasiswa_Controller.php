<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CRUDMahasiswa_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // variabel data digunakan untuk,megambil data di model Mahasiswa
        // $data = nama model :: orderBy('diurutkan dari emailnya','artinya dimulai dari Z-A')->paginate(10); 10 data perpage
        $data = Mahasiswa :: orderBy('nama','asc')->paginate(10);
        // return view(' folder mahasiswa/data.blade.php')->with('varibael baru (yang bearada di view)',akan disi dengan variabel $data (yang berada di CRUD_Mahasiswa));
      return view('mahasiswa/data')->with('variabelview', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // menampilkan form
    public function create()
    {
        //arahkan ke form tadi
        return view('mahasiswa/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  menyimpan data hasil dari fungsi create
    public function store(Request $request)
    {
        // agar ketika ada isian yang kurang,isian lain yang udah diisi tidak hilang/ter reset
        Session::flash('nama',$request->nama);
        Session::flash('alamat',$request->alamat);
        Session::flash('kota',$request->kota);
        Session::flash('provinsi',$request->provinsi);
        Session::flash('email',$request->email);

        //proses validasi,klo tidak diisi ngga akan di return , diabagian create.blade jangan lupa isikan name=""
        $request-> validate([
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'email' => 'required',
        ],[
            // pesan custom jika tidak diisi
            'nama.required' => 'wajib diisi cuy NAMA nya',
            'alamat.required' => 'wajib diisi cuy ALAMAT nya',
            'kota.required' => 'wajib diisi cuy KOTA nya',
            'provinsi.required' => 'wajib diisi cuy PROVINSI nya',
            'email.required' => 'wajib diisi cuy EMAIL nya',

        ]
    );

        $data = [
            'nama' => $request -> input('nama'),
            'alamat' => $request -> input('alamat'),
            'kota' => $request -> input('kota'),
            'provinsi' => $request -> input('provinsi'),
            'email' => $request -> input('email'),
        ];

        Mahasiswa::create($data);
        return redirect('siswacon');
        // return 'abcd';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = Mahasiswa::where ('email',$id)->first();
        return view('mahasiswa/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // return 'aaknaknak';
        $data=Mahasiswa::where('email',$id)->first();
        return view('mahasiswa/edit')->with('variabelview',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // return 'aiadijia';
        $request-> validate([
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'provinsi' => 'required'
            // 'email' => 'required',
        ],[
            // pesan custom jika tidak diisi
            'nama.required' => 'wajib diisi cuy NAMA nya',
            'alamat.required' => 'wajib diisi cuy ALAMAT nya',
            'kota.required' => 'wajib diisi cuy KOTA nya',
            'provinsi.required' => 'wajib diisi cuy PROVINSI nya'
            // 'email.required' => 'wajib diisi cuy EMAIL nya',

        ]
    );

    $data = [
        'nama' => $request -> input('nama'),
        'alamat' => $request -> input('alamat'),
        'kota' => $request -> input('kota'),
        'provinsi' => $request -> input('provinsi')
        // 'email' => $request -> input('email'),
    ];

    Mahasiswa::where('email',$id)->update($data);
    return redirect('/siswacon')->with('success','Berhasil Melakukan Update ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mahasiswa::where('email',$id)->delete();
        return redirect('/siswacon')->with('success','Berhasil Hapus DATA ');
    }
}
