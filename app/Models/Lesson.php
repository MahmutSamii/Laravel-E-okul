<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lesson';
    protected $fillable = ['lesson','status'];
    public $timestamps = false;
    use HasFactory;
    public function lessonTeacher()
    {
        return $this->hasMany('App\Models\SchoolStuff', 'id', 'lecturer');
    }
}
