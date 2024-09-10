<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabunganQurban extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'nrp',
        'nama',
        'perusahaan',
        'tanggal',
        'nominal',
        'jangka_waktu',
        'status',
        'total_nominal',
    ];
}
