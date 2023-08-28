<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilaiK extends Model
{
    use HasFactory;

    protected $table = 'nilai_k_s'; // Sesuaikan dengan nama tabel di database Anda
    protected $fillable = [
        'jenis',
        'nilai_k',
    ];
}
