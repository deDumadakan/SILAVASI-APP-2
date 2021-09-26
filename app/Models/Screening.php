<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screening extends Model
{
    use HasFactory;
    protected $table = 'screenings';
    protected $fillable = [
             'petugas_id',
             'nik',
             'nama',
             'noHP',
             'tglLahir',
             'dosisVaksin',
             'tglVaksin',
             'suhu',
             'tekananDarah',
             'p1',
             'p2',
             'p3',
             'p4',
             'p5',
             'p6',
             'p7',
             'p8',
             'p9',
             'p10',
             'p11',
             'p12',
             'p13',
             'p14a',
             'p14b',
             'p14c',
             'p14d',
             'p14e'
    ];
}
