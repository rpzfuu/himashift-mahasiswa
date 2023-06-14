<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table ='absen';
    protected $primaryKey = 'id_absen';

    protected $fillable = [
        'jenis_absen',
        'mulai',
        'akhir',
    ];

    public function kehadiran()
    {
        return $this->hasMany(Kehadiran::class, 'id_absen');
    }
}