<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Mahasiswa extends Authenticatable
{
    use Notifiable;
    
    protected $table = 'mahasiswa';
    
    protected $primaryKey = 'nim'; protected $keyType = 'string'; public $incrementing = false;

    protected $fillable = [
        'nim',
        'password',
        'nama',
    ];

    protected $hidden = [
        'password',
    ];
    public function divisi()
    {
        return $this->belongsToMany(Divisi::class, 'mahasiswa_divisi', 'nim', 'id_divisi');
    }
    public function absensi(){
        return $this->belongsToMany(Absensi::class,'kehadiran','nim','id_absen');
    }
}