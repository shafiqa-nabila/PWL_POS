<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // INSERT data - PAKAI 'nama_user' sesuai tabel Anda
        $data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama_user' => 'Manager 3',        // Ganti 'nama' jadi 'nama_user'
            'password' => Hash::make('12345')
        ];

        UserModel::insert($data);

        return 'Insert data baru berhasil!';
    }
}
