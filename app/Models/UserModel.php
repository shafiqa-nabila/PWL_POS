<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';

    // TAMBAHKAN INI biarEloquent tahu kolom yang boleh diisi
    protected $fillable = ['level_id', 'username', 'nama_user', 'password'];
}
