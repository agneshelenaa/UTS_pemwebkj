<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    // Nama tabel (opsional jika sesuai konvensi)
    protected $table = 'pasiens';

    // Field yang bisa diisi (mass assignment)
    protected $fillable = [
        'nama',
        'nik',
        'usia',
        'jenis_kelamin',
        'keluhan',
    ];
}
