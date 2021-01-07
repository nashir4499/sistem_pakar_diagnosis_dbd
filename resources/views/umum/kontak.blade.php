@extends('layouts.umum')

@section('title', 'Kontak')

@section('content')

<div class="container-fluid mt-5 bagian-kontak">
    <div class="container">
        <div class="row kontak-align-vertical">
            <div class="col-md-4">
                <a href="https://www.halodoc.com/tanya-dokter">
                    <div class="kontak-konten p-5 rounded-pill">
                        <img src="{{ asset('img/halodoc.png') }}" alt="" width="100%">
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="https://www.alodokter.com/komunitas/diskusi/penyakit">
                    <div class="kontak-konten p-5 rounded-pill">
                        <img src="{{ asset('img/alodokter.png') }}" alt="" width="100%">
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="https://www.klikdokter.com/tanya-dokter">
                    <div class="kontak-konten p-5 rounded-pill">
                        <img src="{{ asset('img/klikdokter.png') }}" alt="" width="100%">
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
