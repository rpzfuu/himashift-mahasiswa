@extends('layout.layout-dashboard')

@section('nama', $mahasiswa->nama)

@section('content')
<div class="card berita warna-secondary" style="border-radius: 14px !important;">
    <div class="card-header text-center">
        <h2>BERITA</h2>
    </div>
    <div class="card-body">
        <h3>Info Hari Ini</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus sapiente veniam adipisci quam totam quia, eveniet enim sit a, vitae perferendis quae numquam ea! Praesentium culpa obcaecati ut nulla ipsum.</p>
    </div>
</div>
@stop
