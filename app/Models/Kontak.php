<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    use HasFactory;

    protected $table = 'kontak'; // Nama tabel di database
    protected $primaryKey = 'id_kontak'; // Primary key tabel

    protected $fillable = [
        'nama', // Nama pengirim pesan
        'email', // Email pengirim pesan
        'pesan', // Isi pesan atau saran
    ];
}
