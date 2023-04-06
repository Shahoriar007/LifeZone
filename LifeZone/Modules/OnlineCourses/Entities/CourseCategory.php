<?php

namespace Modules\OnlineCourses\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
    ];
    
    protected static function newFactory()
    {
        return \Modules\OnlineCourses\Database\factories\CourseCategoryFactory::new();
    }
}
