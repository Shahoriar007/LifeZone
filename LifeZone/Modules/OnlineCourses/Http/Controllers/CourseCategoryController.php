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

        if (auth()->user()->is_admin) {

            $courseCategorys = CourseCategory::all();
            return view('onlinecourses::adminSide-Courses.courseCategoryList', compact('courseCategorys'));

        } else {
            return redirect()->route('dashboard');
        }
    }


    public function createIndex()
    {
        if (auth()->user()->is_admin) {

            return view('onlinecourses::adminSide-Courses.addCourseCategory');
        } else {
            return redirect()->route('dashboard');
        }
    }


    public function store(Request $request)
    {
        if (auth()->user()->is_admin) {
            $validatedData = $request->validate([
                'category_name' => 'required|max:50'
            ]);

            $Category = CourseCategory::create([
                'category_name' => $validatedData['category_name'],
            ]);

            return redirect()->route('course_category');
        } else {
            return redirect()->route('dashboard');
        }

    }


    public function edit($id)
    {
        if (auth()->user()->is_admin) {
            return view('onlinecourses::edit');
        } else {
            return redirect()->route('dashboard');
        }
    }


    public function destroy($id)
    {
        if (auth()->user()->is_admin) {
            CourseCategory::findOrFail($id)->delete();

            return redirect()->route('course_category');
        } else {
            return redirect()->route('dashboard');
        }
    }
}
