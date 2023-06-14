@extends('layout.layout')

@section('content')
<div class="container text-white">
    <div class="justify-content-center" style="margin-right:10%;margin-left:10%">
        <table id="myTable" class="table table-bordered border-dark">
            <thead class="warna-primary text-white">
                <tr>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>DIVISI</th>
                </tr>
            </thead>
            <tbody class="warna-secondary">
                @php
                    $mahasiswaSorted = $mahasiswa->sortBy(function ($mahasiswa) {
                        return $mahasiswa->divisi->first()->nama_divisi ?? '';
                    });
                @endphp
                @foreach ($mahasiswaSorted as $i => $m )
                    <tr>
                        <td>{{ $m->nim }}</td>
                        <td>{{ $m->nama }}</td>
                        <td>
                            @foreach ($m->divisi as $divisi)
                                {{ $divisi->nama_divisi }}
                            @endforeach
                    </td>
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
</div>

@stop