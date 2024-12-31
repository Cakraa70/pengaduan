<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduan'; // Nama tabel di database
    protected $primaryKey = 'id_pengaduan'; // Primary key tabel

    protected $fillable = [
        'judul', // Judul pengaduan
        'deskripsi', // Deskripsi pengaduan
        'status', // Status pengaduan (baru, diproses, selesai)
        'user_id', // ID pengguna yang mengirim pengaduan
    ];

    // Relasi dengan tabel User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
