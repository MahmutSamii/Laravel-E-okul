<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'class';
    protected $fillable = ['class_name','num_of_students','teacher_of_class','quota'];
    public $timestamps = false;
    use HasFactory;

    function schoolStuffs()
    {
        return $this->hasMany('App\Models\SchoolStuff', 'id', 'teacher_of_class');
    }
}
