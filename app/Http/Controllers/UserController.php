<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
{
    $count = UserModel::count();
    $max = UserModel::max('level_id');
    $avg = UserModel::avg('level_id');

    return view('user', compact('count', 'max', 'avg'));
}
}
