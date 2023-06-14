<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $table = 'event';
    protected $primaryKey = 'id_acara';
    
    protected $fillable = [
        'nama_acara',
        'tanggal',
        'ketua_pelaksana'
    ];
}