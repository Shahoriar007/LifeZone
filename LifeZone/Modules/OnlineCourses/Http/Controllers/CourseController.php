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
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
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

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('onlinecourses::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('onlinecourses::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('onlinecourses::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
