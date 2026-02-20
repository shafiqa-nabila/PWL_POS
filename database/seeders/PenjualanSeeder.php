<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::table('t_penjualan')->insert([
        ['user_id' => 1, 'penjualan_kode' => 'PJL00001', 'penjualan_tanggal' => now()],
        ['user_id' => 1, 'penjualan_kode' => 'PJL00002', 'penjualan_tanggal' => now()],
        ['user_id' => 1, 'penjualan_kode' => 'PJL00003', 'penjualan_tanggal' => now()],
        ['user_id' => 1, 'penjualan_kode' => 'PJL00004', 'penjualan_tanggal' => now()],
        ['user_id' => 1, 'penjualan_kode' => 'PJL00005', 'penjualan_tanggal' => now()],
        ['user_id' => 1, 'penjualan_kode' => 'PJL00006', 'penjualan_tanggal' => now()],
        ['user_id' => 1, 'penjualan_kode' => 'PJL00007', 'penjualan_tanggal' => now()],
        ['user_id' => 1, 'penjualan_kode' => 'PJL00008', 'penjualan_tanggal' => now()],
        ['user_id' => 1, 'penjualan_kode' => 'PJL00009', 'penjualan_tanggal' => now()],
        ['user_id' => 1, 'penjualan_kode' => 'PJL00010', 'penjualan_tanggal' => now()],
    ]);
}
}
