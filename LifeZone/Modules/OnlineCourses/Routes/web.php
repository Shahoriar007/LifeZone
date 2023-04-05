<?php

use Modules\OnlineCourses\Http\Controllers\CourseController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('onlinecourses')->group(function() {
    Route::get('/', 'OnlineCoursesController@index');

    
});



 Route::get('/courses', [CourseController::class, 'index'])->name('courses');
 Route::get('/course-details/{id}', [CourseController::class, 'course_details_index'])->name('course-details');


