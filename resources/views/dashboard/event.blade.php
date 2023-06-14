@extends('layout.layout-dashboard')

@section('nama', $mahasiswa->nama)

@section('content')
<div class="text-center col-md-11 mt-5">
    <table id="myTable" class="table table-responsive table-bordered border-dark">
        <thead class="warna-primary text-white">
            <tr>
                <th>No</th>
                <th>Nama Acara</th>
                <th>Tanggal</th>
                <th>Ketua Pelaksana</th>
            </tr>
        </thead>
        <tbody class="warna-secondary">
            @foreach ($event as $i => $e )
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $e->nama_acara }}</td>
                <td>{{ $e->tanggal }}</td>
                <td>{{ $e->ketua_pelaksana }}</td>
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
