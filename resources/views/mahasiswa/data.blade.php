@extends('layout/aplikasi')

@section('konten')
<a href="/siswacon/create" class="btn btn-primary"> + Tambah Data </a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th> Kota</th>
                <th> Provinsi</th>
                <th> Email</th>
                <th> Aksi</th>

            <tr>
                <thead>

                <tbody>
                    {{-- variabel view yangs sebelume udah di definsikan di Controler --}}
                    {{-- @foreach ($variabelview as $item (variabel ini mendefiniskan kolom di database)) --}}
                    @foreach ($variabelview as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->kota }}</td>
                            <td>{{ $item->provinsi }}</td>
                            <td>{{ $item->email }}</td>
                            {{-- <td><a class="btn btn-secondary btn-sm" href="{{ url('/siswa/') }}"> --}}
                                {{-- <td><a class="btn btn-secondary btn-sm" href='{{ url('/siswacon (mengambil rute dari siswacon)/'.$item->email (setelah itu akan ditambahi email)) }}'>Detail </a></td> --}}
                            <td>
                                <a class="btn btn-secondary btn-sm" href='{{ url('/siswacon/'.$item->email) }}'>Detail </a>
                                <a class="btn btn-warning btn-sm" href='{{ url('/siswacon/'.$item->email.'/edit') }}'>Edit </a>
                                <form action="{{ '/siswacon'.$item ->email }}" class="d-inline"  method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete </button>
                                </form>
                            
                            </td>
                            {{-- <td>{{ $d->nim }}</td> --}}
                        <tr>
                    @endforeach
        <tbody>
    </table>
    {{-- tombol next previous dampak paginate --}}
    {{-- variabel view yangs sebelume udah di definsikan di Controler --}}
    {{ $variabelview->links() }}
@endsection
{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>

<body>
    <div>
        <table>
            <thead>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Telp</th>
                <th>Alamat</th>
            <thead>
        </table> --}}
{{-- <tbody>
               @foreach ($dataMhs as $d)
                    <tr>
                        <td></td>
                        <td>{{ $d->nim }}</td>
                    <tr>
               @endforeach
        <tbody> --}}
{{-- </div>
</body>

</html> --}}
