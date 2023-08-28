<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gelandang extends Model
{
    use HasFactory;

    protected $table = 'gelandangs'; // Sesuaikan dengan nama tabel di database Anda
    protected $fillable = [
        'nama', 
        'umur', 
        'berat_badan', 
        'tinggi', 
        'kaki_utama', 
        'pace', 
        'shooting', 
        'passing', 
        'dribbling', 
        'defending', 
        'physical', 
        'overall',
        'masuk_squad'
    ];
}
