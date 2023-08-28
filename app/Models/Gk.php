<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gk extends Model
{
    use HasFactory;

    protected $table = 'gks'; // Sesuaikan dengan nama tabel di database Anda
    protected $fillable = [
        'nama', 
        'umur', 
        'berat_badan', 
        'tinggi', 
        'kaki_utama', 
        'diving', 
        'handling', 
        'kicking', 
        'reflexes', 
        'speed', 
        'positioning', 
        'overall',
        'masuk_squad'
    ];
}
