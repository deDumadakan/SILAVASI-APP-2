<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaksin extends Model
{
    use HasFactory;
    protected $table = 'vaksins';
    protected $fillable = [
        'nik',
        'nama',
        'str', 
        'namaVaksinator',
        'jenisVaksin',
        'dosisVaksin',
        'tanggalVaksin',
        'tempatVaksin'
    ];
}
