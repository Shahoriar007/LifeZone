<?php

namespace Modules\OnlineCourses\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\OnlineCourses\Entities\ContentSummary;

class CourseContentSummaryController extends Controller
{
    
    public function index($id)
    {
        return view('onlinecourses::adminSide-Courses.addCourseContentSummary', compact('id'));
    }

   
    public function store(Request $request)
    {
        $id = $request->course_id;

        $validatedData = $request->validate([
            'summary_title' => 'required|max:255',
            'course_id' => 'required'
        ]);

        $Category = ContentSummary::create([
            'summary_title' => $validatedData['summary_title'],
            'course_id' => $validatedData['course_id'],
        ]);

        return redirect()->route('course_content_list', $id );
    }

    
    public function edit($id)
    {
        return view('onlinecourses::edit');
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {

        ContentSummary::findOrFail($id)->delete();

        return redirect()->back();
    }
}
