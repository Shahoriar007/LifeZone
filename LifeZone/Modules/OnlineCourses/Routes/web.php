<?php

use Modules\OnlineCourses\Http\Controllers\CourseController;
use Modules\OnlineCourses\Http\Controllers\CoursePaymentController;

use Modules\OnlineCourses\Http\Controllers\CourseCategoryController;


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

// Course Category
Route::get('/course-category', [CourseCategoryController::class, 'index'])->name('course_category');

