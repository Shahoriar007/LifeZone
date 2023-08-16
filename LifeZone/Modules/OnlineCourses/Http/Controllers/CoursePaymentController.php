<?php

namespace Modules\OnlineCourses\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\OnlineCourses\Entities\Course;
use Modules\OnlineCourses\Entities\CoursePayment;

class CoursePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function course_payment_index($id)
    {
        $courseData = Course::find($id);

        return view('onlinecourses::userSide-Courses.payment',compact('courseData'));
    }

    public function confirm_course_payment(Request $request , $id)
    {

          CoursePayment::create([
            'tr_id' => $request->tr_id,
            'user_id' => $request->user_id,
            'course_id' => $request->course_id,
            'course_price' => $request->course_price,

        ]);

        return back();
        // return view('onlinecourses::userSide-Courses.payment',compact('courseData'));
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
