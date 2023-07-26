@extends('layout/aplikasi')
@section('konten')
    <a class="btn btn-secondary btn-sm" href='/siswacon'>
        <- Kembali </a>
            <form method="post" action="{{ '/siswacon/'.$variabelview->email }}" >
                @csrf

                {{-- agar masuk ke fungsi update --}}
                @method('PUT')

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{ $variabelview->nama }}">
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat"
                        value="{{ $variabelview->alamat }}">
                </div>

                <div class="mb-3">
                    <label for="kota" class="form-label">kota</label>
                    <input type="text" class="form-control" id="kota" name="kota"
                        value="{{ $variabelview->kota }}">
                </div>

                <div class="mb-3">
                    <label for="provinsi" class="form-label">provinsi</label>
                    <input type="text" class="form-control" id="provinsi" name="provinsi"
                        value="{{ $variabelview->nama }}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <h4> {{ $variabelview->email }} </h4>
                </div>

                <button type="submit" class="btn btn-primary">UPDATE</button>

            </form>
        @endsection
