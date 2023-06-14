<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Divisi;
use App\Models\MahasiswaDivisi;
use App\Models\Absensi;
use App\Models\Kehadiran;
use App\Models\Event;

class dashboardController extends Controller
{
    public function index(){
        $nim=Auth::user()->nim;
        $mahasiswa=Mahasiswa::where('nim',$nim)->first();
        return view('dashboard.index',compact('mahasiswa'));
    }
    public function profil(){
        $nim=Auth::user()->nim;
        $mahasiswa = Mahasiswa::where('nim',$nim)->with('divisi')->first();
        return view('dashboard.profil',compact('mahasiswa'));
    }
    public function absensi(){
        $nim=Auth::user()->nim;
        $mahasiswa = Mahasiswa::where('nim', $nim)->with('absensi')->first();
        return view('dashboard.absensi',compact('mahasiswa'));
    }
    public function event(){
        $nim=Auth::user()->nim;
        $event=Event::all();
        $mahasiswa=Mahasiswa::where('nim',$nim)->first();
        return view('dashboard.event',compact('mahasiswa','event'));
    }
    public function sertifikat(){
        $nim=Auth::user()->nim;

        $mahasiswa=Mahasiswa::where('nim',$nim)->first();
        return view('dashboard.sertifikat',compact('mahasiswa'));
    }
    public function update(Request $request, string $nim, int $id_absen)
    {
        $status_kehadiran = $request->status_kehadiran;
            Kehadiran::where(['nim' => $nim, 'id_absen' => $id_absen])
            ->update([
                'status_kehadiran' => 'Hadir'
            ]);
        return back();
    }
}