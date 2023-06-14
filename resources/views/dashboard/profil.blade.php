@extends('layout.layout-dashboard')

@section('nama', $mahasiswa->nama)

@section('content')
<div class="row text-center">
    <div class="col-md-12 mt-5 mb-5 ">
        <!-- Bagian Atas -->
        <img src="{{ asset('images/profil/fahrul.jpg') }}" width=920 height=180 alt="Profil" class="crop-gambar">
        <!-- Konten Bagian Atas -->
    </div>
</div>
<div class="row mt-5 mb-5">
    <div class="col-md-3 offset-md-1">
        <!-- Bagian Kiri -->
        <img src="{{ asset('images/profil/reni.jpg') }}" width=290 height=290 alt="Profil" class="crop-gambar">
        <!-- Konten Bagian Kiri -->
    </div>
    <div class="col-md-7 offset-md-1">
        <!-- Bagian Kanan -->
        <div class="row mb-5">
            <div class="col-md-2">
                <h2 class="text-right">NAMA</h2>
            </div>
            <div class="col-md-8">
                <h2>: {{ $mahasiswa->nama }}</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-2">
                <h2 class="text-right">NIM</h2>
            </div>
            <div class="col-md-8">
                <h2>: {{ $mahasiswa->nim }}</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-2">
                <h2 class="text-right">DIVISI</h2>
            </div>
            <div class="col-md-8">
                <h2>: 
                    @foreach ($mahasiswa->divisi as $d )
                        {{ $d->nama_divisi }}
                    @endforeach
                </h2>
            </div>
        </div>
        <!-- Konten Bagian Kanan -->
    </div>
</div>
@stop
