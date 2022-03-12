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
    protected $table = 'school_stuff';
    protected $fillable = ['department','name','email','phone','image','is_teacher'];
    public $timestamps = false;
    use HasFactory;
}
