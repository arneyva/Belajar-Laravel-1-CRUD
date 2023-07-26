@extends('layout/aplikasi')
@section('konten')
    <div>
        <a class="btn btn-secondary btn-sm" href='/siswacon'><- Kembali </a>
        <h1>{{ $data->nama }} </h1>
        <p>
            <b>Email : </b> {{ $data->email }}
        </p>

        <p>
            <b>Alamat : </b> {{ $data->alamat }}
        </p>

    </div>
@endsection