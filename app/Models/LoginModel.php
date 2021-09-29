<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class LoginModel extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['name','email','password','user_name','user_admin'];
}
class RegisterModel extends Model
{
    use HasFactory;
    protected $table = 'vamos_users';
    protected $fillable = ['user_name','user_email','user_passw','user_admin'];
}
