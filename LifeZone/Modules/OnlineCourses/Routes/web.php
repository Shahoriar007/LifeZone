<?php

use Modules\OnlineCourses\Http\Controllers\CourseController;
use Modules\OnlineCourses\Http\Controllers\CoursePaymentController;

use Modules\OnlineCourses\Http\Controllers\CourseCategoryController;
use Modules\OnlineCourses\Http\Controllers\AdminCourseController;
use Modules\OnlineCourses\Http\Controllers\CourseContentController;
use Modules\OnlineCourses\Http\Controllers\CourseContentSummaryController;


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


// User Side 

// All course
 Route::get('/courses', [CourseController::class, 'index'])->name('courses');
// Course Details
 Route::get('/course-details/{id}', [CourseController::class, 'course_details_index'])->name('course-details');
// Course checkout
Route::get('/course-checkout/{id}', [CourseController::class, 'course_checkout_index'])->name('course-checkout');



Route::middleware('auth')->group(function () {

// Course payment
Route::get('/course-payment/{id}', [CoursePaymentController::class, 'course_payment_index'])->name('course-payment');
    
});

// Admin side

// ----------------------------------Course Category Start-----------------------------
// Course Category List
Route::get('/course-category', [CourseCategoryController::class, 'index'])->name('course_category');
// Add Course Category from View
Route::get('/add_course-category', [CourseCategoryController::class, 'createIndex'])->name('add_course_category_view');
// Store Course Category
Route::post('/add_course-category', [CourseCategoryController::class, 'store'])->name('add_course_category');
// Delete Category
Route::get('/add_course-category/{id}', [CourseCategoryController::class, 'destroy'])->name('delete_course_category');

// ----------------------------------Course Category End-----------------------------



// ----------------------------------Course Start-----------------------------
// Course  List
Route::get('/courses-list', [AdminCourseController::class, 'index'])->name('courses-list');
// Add Course from View
Route::get('/add_course', [AdminCourseController::class, 'createIndex'])->name('add_course_view');
// Store Course 
Route::post('/add_course', [AdminCourseController::class, 'store'])->name('add_course');
// Delete Course
Route::get('/add_course/{id}', [AdminCourseController::class, 'destroy'])->name('delete_course');

// ----------------------------------Course Ends-----------------------------


// ----------------------------------Course Contents-----------------------------
// Contents list
Route::get('/course-content-list/{id}', [CourseContentController::class, 'index'])->name('course_content_list');
// Add Content form View
Route::get('/add-course-content/{id}', [CourseContentController::class, 'createContent'])->name('add_course_video_view');
// Store Content 
Route::post('/store-course-content', [CourseContentController::class, 'store'])->name('add_course_content');
// Delete Content 
Route::get('/delete-course-content/{id}', [CourseContentController::class, 'destroy'])->name('delete_course_content');



// ----------------------------------Course Content Summary Starts-----------------------------
// Add course Summary form View
Route::get('/add-course-summary-view/{id}', [CourseContentSummaryController::class, 'index'])->name('add_course_summary_view');
// Store Course Summary
Route::post('/add-course-summary', [CourseContentSummaryController::class, 'store'])->name('add_course_summary');
// Delete Course Summary
Route::get('/add-course-summary/{id}', [CourseContentSummaryController::class, 'destroy'])->name('delete_course_summary');

// ----------------------------------Course Content Summary Ends-----------------------------
