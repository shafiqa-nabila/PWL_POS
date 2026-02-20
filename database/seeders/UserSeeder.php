<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_user')->insert([
            ['level_id' => 1, 'username' => 'admin', 'nama_user' => 'Administrator', 'password' => Hash::make('1234')],
            ['level_id' => 2, 'username' => 'manager', 'nama_user' => 'Manager Satu', 'password' => Hash::make('1234')],
            ['level_id' => 3, 'username' => 'staff', 'nama_user' => 'Staff Satu', 'password' => Hash::make('1234')],
        ]);
    }
}
