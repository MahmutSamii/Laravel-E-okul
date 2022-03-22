<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $fillable = ['name','student_no','phone','image','classroom','parent_name','created_at','updated_at'];
    public $timestamps = false;
    use HasFactory;

    function studentClasroom()
    {
        return $this->hasOne('App\Models\Classes', 'id', 'classroom');
    }
}
