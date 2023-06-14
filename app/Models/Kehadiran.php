<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    use HasFactory;

    protected $table = 'kehadiran';
    protected $primaryKey = ['nim', 'id_absen'];
    public $incrementing = false;

    protected $fillable = [
        'nim',
        'id_absen',
        'status_kehadiran',
        'mulai',
        'akhir'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim');
    }

    public function absen()
    {
        return $this->belongsTo(Absen::class, 'id_absen');
    }
}