<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    //kết nối đến bảng users
    protected $table = 'users'; // liên kết đến bảng users trong db
    //nếu không có 2 trường timestamp(updated_at và created_at) thì phải khai báo
    //public $timestamps = false;
}
