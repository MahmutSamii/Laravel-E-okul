<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassData extends Model
{
    protected $table = 'class_data';
    protected $fillable = ['class_id','lesson_id','teacher_id'];
    public $timestamps = false;
    use HasFactory;
}
