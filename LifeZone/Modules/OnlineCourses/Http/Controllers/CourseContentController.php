<?php

namespace Modules\OnlineCourses\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\OnlineCourses\Entities\Course;
use Modules\OnlineCourses\Entities\CourseCategory;
use Modules\OnlineCourses\Entities\ContentSummary;
use Modules\OnlineCourses\Entities\CourseContent;

class CourseContentController extends Controller
{

    public function index($id)
    {
        $contents = ContentSummary::where('course_id', '=', $id)->get();

        return view('onlinecourses::adminSide-Courses.courseContentList',compact('contents','id'));
    }


    public function createContent($id)
    {
        return view('onlinecourses::adminSide-Courses.addCourseContent', compact('id'));

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'video_title' => 'required',
            'video_link' => 'required',
        ]);

        $Category = CourseContent::create([
            'video_title' => $validatedData['video_title'],
            'video_link' => $validatedData['video_link'],
            'content_summary_id' => $request->content_summary_id,

        ]);

        $courseId = ContentSummary::where('id', '=', $request->content_summary_id)->get();

       return redirect()->route('course_content_list', $courseId[0]->course_id);


    }



    public function destroy($id)
    {

        CourseContent::findOrFail($id)->delete();

        return redirect()->back();
    }

    // ----------------> write a function to that show all my course list
    
}
