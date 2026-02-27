<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
{
    $users = UserModel::with('level')->get();
    return view('user', ['data' => $users]);
}

public function tambah()
{
    return view('user_tambah');
}

public function tambah_simpan(Request $request)
{
    UserModel::create([
        'username' => $request->username,
        'nama_user' => $request->nama,  // Ganti dari 'nama_user' ke 'nama'
        'password' => Hash::make($request->password),
        'level_id' => $request->level_id
    ]);

    return redirect('/user');
}

public function ubah($id)
{
    $user = UserModel::find($id);
    return view('user_ubah', ['user' => $user]);
}

public function ubah_simpan(Request $request, $id)
{
    $user = UserModel::find($id);

    $user->username = $request->username;
    $user->nama_user = $request->nama;  // Perhatikan: 'nama_user' diisi dari 'nama'
    $user->level_id = $request->level_id;

    if ($request->password) {
        $user->password = Hash::make($request->password);
    }

    $user->save();

    return redirect('/user');
}

public function hapus($id)
{
    $user = UserModel::find($id);
    $user->delete();

    return redirect('/user');
}
}
