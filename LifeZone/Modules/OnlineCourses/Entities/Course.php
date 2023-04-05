<?php

namespace Modules\OnlineCourses\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\OnlineCourses\Database\factories\CourseFactory::new();
    }
}
