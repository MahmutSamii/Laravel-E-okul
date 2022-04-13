<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamDate extends Model
{
    protected $table = 'exam_date';
    protected $fillable = ['lesson_name','exam_name','date'];
    public $timestamps = false;
    use HasFactory;
}
