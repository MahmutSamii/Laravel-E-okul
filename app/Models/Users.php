<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authentication;

class Users extends Authentication
{
    protected $table = 'users';
    protected $fillable = ['username','email','resource','resource_id','password'];
    public $timestamps = false;
    use HasFactory;

    function userDepartment()
    {
        return $this->hasMany('App\Models\Department', 'id', 'department_id');
    }
}
