<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PinjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pinjamans')->insert([
            [
                'nomor' => 1,
                'jenis_pinjaman' => 'Pinjaman Modal Usaha',
                'awal_angsuran' => 1000000,
                'akhir_angsuran' => 1000000,
                'nominal_pengajuan' => 50000000,
                'nominal_disetujui' => 45000000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nomor' => 2,
                'jenis_pinjaman' => 'Pinjaman Pendidikan',
                'awal_angsuran' => 2000000,
                'akhir_angsuran' => 2000000,
                'nominal_pengajuan' => 30000000,
                'nominal_disetujui' => 30000000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
