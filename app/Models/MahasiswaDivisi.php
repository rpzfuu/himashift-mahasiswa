<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaDivisi extends Model
{
    protected $table ='mahasiswa_divisi';
    protected $primaryKey = ['NIM', 'DIVISI_ID'];
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable=[
        'nim',
        'id_divisi'
    ];
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim');
    }

    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'id_divisi');
    }
}