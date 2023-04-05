<?php

namespace Modules\OnlineCourses\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

use Modules\OnlineCourses\Entities\Course;
use Modules\OnlineCourses\Entities\CourseCategory;
use Modules\OnlineCourses\Entities\ContentSummary;
use Modules\OnlineCourses\Entities\CourseContent;

class CourseController extends Controller
{
   
    public function index()
    {
        $courseCategorys = CourseCategory::all();
        $courses = Course::all();   

        return view('onlinecourses::userSide-Courses.allCourses',compact('courseCategorys','courses'));
    }

    // Course Details 

    public function course_details_index($id)
    {

        $courseDetails = DB::table('course_categories')
            ->join('courses', 'course_categories.id', '=', 'courses.course_categories')
            ->select('courses.*', 'course_categories.category_name as courseCategoryName')
            ->where('courses.id', '=', $id)
            ->get();

        $content = ContentSummary::where('course_id', '=', $id)->get();

        return view('onlinecourses::userSide-Courses.courseDetails',compact('courseDetails','content'));
    }

    // Checkout Details

    public function course_checkout($id)
    {
        $courseData = Course::find($id);

        return view('onlinecourses::userSide-Courses.checkout',compact('courseData'));
    }

    
}
