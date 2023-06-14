<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class berandaController extends Controller
{
    public function anggota(){
        $mahasiswa = Mahasiswa::with('divisi')->get();
        return view('beranda.anggota',compact('mahasiswa'));
    }
}