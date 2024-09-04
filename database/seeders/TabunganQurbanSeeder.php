<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TabunganQurbanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tabungan_qurbans')->insert([
            [
                'nrp' => '12345',
                'nama' => 'Ahmad Fauzi',
                'perusahaan' => 'PT Maju Jaya',
                'tanggal' => Carbon::now(),
                'nominal' => 500000,
                'jangka_waktu' => 12,
                'status' => 'Aktif',
                'total_nominal' => 6000000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nrp' => '67890',
                'nama' => 'Siti Aminah',
                'perusahaan' => 'PT Sejahtera',
                'tanggal' => Carbon::now()->subMonths(2),
                'nominal' => 750000,
                'jangka_waktu' => 24,
                'status' => 'Tidak Aktif',
                'total_nominal' => 18000000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
