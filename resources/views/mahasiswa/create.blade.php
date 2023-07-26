@extends('layout/aplikasi')
@section('konten')
<form action="/siswacon" method="post"> 
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="{{ Session::get('nama') }}">
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ Session::get('alamat') }}">
    </div>

    <div class="mb-3">
        <label for="kota" class="form-label">kota</label>
        <input type="text" class="form-control" id="kota" name="kota" value="{{ Session::get('kota') }}">
    </div>

    <div class="mb-3">
        <label for="provinsi" class="form-label">provinsi</label>
        <input type="text" class="form-control" id="provinsi" name="provinsi" value="{{ Session::get('provinsi') }}">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ Session::get('email') }}">
    </div>

    <button type="submit" class="btn btn-primary">SIMPAN</button>
    <a href="/siswacon" class="btn btn-primary"> KEMBALI </a>
</form>
@endsection
