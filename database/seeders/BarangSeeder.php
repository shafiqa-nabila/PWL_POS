<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    DB::table('m_barang')->insert([
        ['kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Nasi Goreng', 'harga_beli' => 10000, 'harga_jual' => 15000],
        ['kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Mie Ayam', 'harga_beli' => 8000, 'harga_jual' => 12000],
        ['kategori_id' => 2, 'barang_kode' => 'BRG003', 'barang_nama' => 'Es Teh', 'harga_beli' => 3000, 'harga_jual' => 5000],
        ['kategori_id' => 2, 'barang_kode' => 'BRG004', 'barang_nama' => 'Jus Alpukat', 'harga_beli' => 8000, 'harga_jual' => 13000],
        ['kategori_id' => 3, 'barang_kode' => 'BRG005', 'barang_nama' => 'iPhone 15', 'harga_beli' => 14000000, 'harga_jual' => 16000000],
        ['kategori_id' => 3, 'barang_kode' => 'BRG006', 'barang_nama' => 'Samsung S24', 'harga_beli' => 12000000, 'harga_jual' => 14000000],
        ['kategori_id' => 4, 'barang_kode' => 'BRG007', 'barang_nama' => 'Laptop ASUS', 'harga_beli' => 7000000, 'harga_jual' => 8500000],
        ['kategori_id' => 4, 'barang_kode' => 'BRG008', 'barang_nama' => 'Keyboard Mechanical', 'harga_beli' => 300000, 'harga_jual' => 450000],
        ['kategori_id' => 5, 'barang_kode' => 'BRG009', 'barang_nama' => 'Kaos Polos', 'harga_beli' => 50000, 'harga_jual' => 80000],
        ['kategori_id' => 5, 'barang_kode' => 'BRG010', 'barang_nama' => 'Celana Jeans', 'harga_beli' => 150000, 'harga_jual' => 250000],
    ]);
}
}
