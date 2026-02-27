<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LevelModel;  // <-- TAMBAHKAN INI

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'level_id',
        'username',
        'nama_user',
        'password'
    ];

    public function level()
    {
        return $this->belongsTo(LevelModel::class, 'level_id');
    }
}
