<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $table = 'divisi';
    protected $primaryKey = 'id_divisi';
    protected $keyType = 'string';
    public $incrementing = 'false';
    
    protected $fillable=[
        'id_divisi',
        'nama_divisi'
    ];
        
    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class, 'mahasiswa_divisi', 'id_divisi', 'nim');
    }
}