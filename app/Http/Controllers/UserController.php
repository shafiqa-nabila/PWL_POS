<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;  // Perbaiki ini (hapus satu Facades)

class UserController extends Controller
{
    public function index()
{
    $data = [
        'level_id' => 2,
        'username' => 'manager_dua',
        'nama_user' => 'Manager 2',          // Kembali ke 'nama'
        'password' => Hash::make('12345')
    ];

    UserModel::create($data);

    $user = UserModel::all();
    return view('user', ['data' => $user]);
}
}
