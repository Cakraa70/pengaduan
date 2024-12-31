<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users'; // Nama tabel di database
    protected $primaryKey = 'id'; // Primary key tabel

    protected $fillable = [
        'name', // Nama pengguna
        'email', // Email pengguna
        'password', // Password hash
    ];

    // Relasi dengan tabel Pengaduan
    public function pengaduan()
    {
        return $this->hasMany(Pengaduan::class, 'user_id', 'id');
    }
}
