<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // TAMBAHKAN INI!

class KategoriController extends Controller
{
    public function index()
    {
        // INSERT - sudah dijalankan (comment)
        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snack/Makanan Ringan',
        //     'created_at' => now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'Insert data baru berhasil';

        // UPDATE - sudah dijalankan (comment)
        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';

        // DELETE - sudah dijalankan (comment)
        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
        // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';

        // MENAMPILKAN DATA - INI YANG AKTIF UNTUK LANGKAH 8
        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]);
    }
}
