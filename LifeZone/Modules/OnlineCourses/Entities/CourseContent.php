<?php

namespace Modules\OnlineCourses\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'video_title',
        'video_link',
        'content_summary_id',

    ];

    protected static function newFactory()
    {
        return \Modules\OnlineCourses\Database\factories\CourseContentFactory::new();
    }
}
