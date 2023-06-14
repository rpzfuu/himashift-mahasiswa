@extends('layout.layout-dashboard')

@section('nama', $mahasiswa->nama)

@section('content')
<div class="text-center col-md-11 mt-5">
    <table id="myTable" class="table table-responsive table-bordered border-dark">
        <thead class="warna-primary text-white">
            <tr>
                <th>Mulai</th>
                <th>Sekarang</th>
                <th>Akhir</th>
                <th>Keterangan</th>
                <th>Kehadiran</th>
                <th>Aksi</th> <!-- Tambahkan kolom Aksi -->
            </tr>
        </thead>
        <tbody class="warna-secondary">
            @foreach ($mahasiswa->absensi as $absensi)
            <tr>
                <td>{{ $absensi->mulai }}</td>
                <td>{{  now()}}</td>
                <td>{{ $absensi->akhir }}</td>
                <td>{{ $absensi->jenis_absen}}</td>
                <td>{{ $absensi->kehadiran->firstWhere('nim',$mahasiswa->nim)->status_kehadiran }}</td>
                <td>
                    @if ((strtotime($absensi->mulai)>strtotime(now())))
                        @if ((strtotime(now())<strtotime($absensi->akhir)))
                            <form action="{{ route('absensi.update',['nim' => $mahasiswa->nim, 'id_absen' => $absensi->id_absen]) }}" method="POST">
                                @csrf
                                <button class="btn btn-primary">Absensi</button>
                            </form> 
                        @endif
                        
                    @else
                        <button class="btn btn-danger disabled">Absensi</button>
                    @endif
                    
                    
                    
                  
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p>test</p>
    <p>{{ strtotime(now()); }}</p>
    <p>{{ strtotime($absensi->akhir) }}</p>
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