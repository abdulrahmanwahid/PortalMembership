<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SimpananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('simpanans')->insert([
            [
                'nomor' => 1,
                'jenis_simpanan' => 'Simpanan Wajib',
                'awal_angsuran' => 500000,
                'akhir_angsuran' => 500000,
                'nominal_pengajuan' => 10000000,
                'nominal_disetujui' => 10000000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nomor' => 2,
                'jenis_simpanan' => 'Simpanan Sukarela',
                'awal_angsuran' => 250000,
                'akhir_angsuran' => 250000,
                'nominal_pengajuan' => 5000000,
                'nominal_disetujui' => 5000000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
