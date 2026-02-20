<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
//     public function index()
// {
//     DB::delete('delete from m_level where level_kode = ?', ['CST']);
// }

public function index()
{
    $data = DB::select('select * from m_level');
    return view('level', ['data' => $data]);
}
}
