@extends('layout.layout-dashboard')

@section('nama', $mahasiswa->nama)

@section('content')
<div class="card berita warna-secondary" style="border-radius: 14px !important;">
    <div class="card-header text-center">
        <h2>SERTIFIKAT</h2>
    </div>
    <div class="card-body">
        <form action="" class="form-group mt-4">
            <label for="jdesk"><h2>Job Desk</h2></label>
            <input type="text" class="form-control form-control-lg mb-3" id="jdesk">
            <br>
            <label for="acara"><h2>Nama Acara</h2></label>
            <input type="text" class="form-control form-control-lg mb-3" id="acara">
            <br><br><br><br><br><br><br>
            <div class="text-center">
                 <button class="btn btn-lg btn-light border-black">Download</button>
            </div>
        </form>
    </div>
</div>
@stop
