<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;
    protected $table = 'membership';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nama',
        'perusahaan',
        'nik',
        'npsn',
        'telp',
        'email',
        'nrp',
        'kode_divisi',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'status',
        'nama_issu',
        'no_darurat',
        'golongan',
        'nama_rek',
        'no_rek',
        'bank',
    ];

}
