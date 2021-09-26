<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataVaksin extends Model
{
    use HasFactory;
    protected $table = 'datavaksins';
    protected $fillable = [
        'jenisVaksin',
        'tglDistribusi',
        'namaDistributor'
    ];
}
