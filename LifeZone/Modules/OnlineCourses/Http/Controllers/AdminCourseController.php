<?php

namespace Modules\OnlineCourses\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

use Modules\OnlineCourses\Entities\CourseCategory;
use Modules\OnlineCourses\Entities\Course;

class AdminCourseController extends Controller
{
    // Show List
    public function index()
    {
        $courses = DB::table('course_categories')
        ->join('courses', 'course_categories.id', '=', 'courses.course_categories')
        ->select('courses.*', 'course_categories.category_name as courseCategoryName')
        ->get();

        return view('onlinecourses::adminSide-Courses.courseList',compact('courses'));
    }

    public function createIndex()
    {
        $courseCategorys = CourseCategory::all();

        return view('onlinecourses::adminSide-Courses.addCourse',compact('courseCategorys'));
    }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:225',
            'slug' => 'required|max:225',
            'price' => 'required',
            'instructor' => 'required|max:225',
            'validity' => 'required|max:225',
            

        ]);

        $Course = Course::create([
            'title' => $validatedData['title'],
            'slug' => $validatedData['slug'],
            'description' => $request->description,
            'price' => $validatedData['price'],
            'instructor' => $validatedData['instructor'],
            'offer_price' => $request->offer_price,
            'validity' => $validatedData['validity'],
            'thumbnails' => $request->thumbnails,
            'course_categories' => $request->course_categories,
        ]);

        return redirect()->route('courses-list');
    }

    

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        Course::findOrFail($id)->delete();

        return redirect()->route('courses-list');
    }
}
