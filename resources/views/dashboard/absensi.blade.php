@extends('layout.layout-dashboard')

@section('nama', $mahasiswa->nama)

@section('content')
<div class="text-center col-md-11 mt-5">
    <table id="myTable" class="table table-responsive table-bordered border-dark">
        <thead class="warna-primary text-white">
            <tr>
                <th>Mulai</th>
                <th>Akhir</th>
                <th>Keterangan</th>
                <th>Kehadiran</th>
            </tr>
        </thead>
        <tbody class="warna-secondary">
            @foreach ($mahasiswa->absensi as $absensi)
            <tr>
                <td>{{ $absensi->mulai }}</td>
                <td>{{ $absensi->akhir }}</td>
                <td>{{ $absensi->jenis_absen}}</td>
                <td>{{ $absensi->kehadiran->firstWhere('nim',$mahasiswa->nim)->status_kehadiran }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
               pageLength: 15,
                lengthChange: false
            });
        });
    </script>
</div>
@stop
