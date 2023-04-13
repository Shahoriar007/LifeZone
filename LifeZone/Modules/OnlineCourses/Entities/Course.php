<?php

namespace Modules\OnlineCourses\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'instructor',
        'offer_price',
        'validity',
        'thumbnails',
        'course_categories',
    ];
    
    protected static function newFactory()
    {
        return \Modules\OnlineCourses\Database\factories\CourseFactory::new();
    }
}
