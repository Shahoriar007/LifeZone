<?php

namespace Modules\OnlineCourses\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CoursePayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'tr_id',
        'user_id',
        'course_id',
        'course_price',

    ];

    protected static function newFactory()
    {
        return \Modules\OnlineCourses\Database\factories\CoursePaymentFactory::new();
    }
}
