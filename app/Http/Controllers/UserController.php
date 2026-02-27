<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
{
    $user = UserModel::find(1);

    $user->nama_user = 'Admin Baru Lagi';
    $user->save();

    // Cek wasChanged setelah disimpan
    var_dump($user->wasChanged());         // true
    var_dump($user->wasChanged('nama'));   // true
    var_dump($user->wasChanged('username')); // false

    dd('Selesai');
}
}
