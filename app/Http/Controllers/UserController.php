<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;  // Perbaiki ini (hapus satu Facades)

class UserController extends Controller
{
    public function index()
{
    $user = UserModel::findOr(99, function () {
        return "User dengan ID 99 tidak ditemukan";
    });
    return view('user', ['data' => $user]);
}
}
