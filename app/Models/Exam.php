<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exam';
    protected $fillable = ['student_id','lesson_id','midterm_exam','final_exam','makeup_exam'];
    public $timestamps = false;
    use HasFactory;
}
