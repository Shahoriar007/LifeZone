<?php

namespace Modules\OnlineCourses\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContentSummary extends Model
{
    use HasFactory;

    protected $fillable = [
        'summary_title',
        'course_id',
    ];
    
    protected static function newFactory()
    {
        return \Modules\OnlineCourses\Database\factories\ContentSummaryFactory::new();
    }
}
