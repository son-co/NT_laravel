<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $table = 'userdetail';

    public function getUser($id){
        $user = DB::select('SELECT * FROM userdetail AS ud JOIN users AS u ON ud.userID = u.id WHERE u.id =? ',[$id]);
        return $user;
    }
}
