<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = 'matakuliahs'; // nama tabel

   
    protected $fillable = [
        'kode_mk',
        'nama_mk',
        'sks',
        'semester',
    ];

  
    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'matakuliah_id');
    }
}