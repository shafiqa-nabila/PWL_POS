<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;  // <-- TAMBAHKAN INI

class UserController extends Controller
{
    public function index()
{
    $user = UserModel::updateOrCreate(
        ['username' => 'manager_dua'],
        [
            'nama' => 'Manager Dua Update',
            'level_id' => 3,
            'password' => Hash::make('54321')
        ]
    );

    return view('user', ['data' => $user]);
}
}
