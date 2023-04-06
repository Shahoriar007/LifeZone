<?php

namespace Modules\OnlineCourses\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\OnlineCourses\Entities\CourseCategory;

class CourseCategoryController extends Controller
{
    // Show List
    public function index()
    {
        $courseCategorys = CourseCategory::all();

        return view('onlinecourses::adminSide-Courses.courseCategoryList',compact('courseCategorys'));
    }

    
    public function createIndex()
    {
        return view('onlinecourses::adminSide-Courses.addCourseCategory');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|max:50'
        ]);

        $Category = CourseCategory::create([
            'category_name' => $validatedData['category_name'],
        ]);

        return redirect()->route('course_category');

    }

    
    public function edit($id)
    {
        return view('onlinecourses::edit');
    }

    
    public function destroy($id)
    {
        CourseCategory::findOrFail($id)->delete();

        return redirect()->route('course_category');
    }
}
