<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    use HasFactory;

    protected $table = 'tentang'; // Nama tabel di database
    protected $primaryKey = 'id_tentang'; // Primary key tabel

    protected $fillable = [
        'judul', // Judul informasi
        'konten', // Isi informasi
        'gambar', // Path gambar, jika ada
    ];
}
