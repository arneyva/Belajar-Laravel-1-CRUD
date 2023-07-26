@extends('layout/navbar')

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <h1>{{ $judul }}</h1>
                    <p>
                    <ul>
                        <li>
                            Email : {{ $kontak['email'] }}
                        </li>

                        <li>
                            Instagram : {{ $kontak['insta'] }}
                        </li>
                    </ul>

                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
