<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaksis')->insert([
            [
                'label' => 'Pembayaran Listrik',
                'tanggal' => Carbon::now(),
                'pos' => 'Keuangan',
                'payment' => 'Transfer Bank',
                'nominal' => 1500000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'label' => 'Pembelian Alat Tulis',
                'tanggal' => Carbon::now()->subDays(3),
                'pos' => 'Operasional',
                'payment' => 'Kartu Kredit',
                'nominal' => 250000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
