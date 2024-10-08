<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'nomor',
        'jenis_simpanan',
        'awal_angsuran',
        'akhir_angsuran',
        'nominal_pengajuan',
        'nominal_disetujui'
    ];
}
