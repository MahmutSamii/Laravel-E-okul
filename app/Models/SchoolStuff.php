<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static attempt(array $array)
 * @method static check(array $array)
 */
class SchoolStuff extends Model
{
    use HasFactory;
    protected $table = 'school_stuff';
    protected $fillable = ['department_id','department','name','email','phone','image','is_teacher'];
    public $timestamps = false;

    public function departments(){
        return $this->hasMany('App\Models\Department','id','department_id');
    }
}
