<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FakeUserController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Log;

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

Route::resource('faculty', FacultyController::class);

Route::resource('courses', CourseController::class);
Route::controller(CourseController::class)->group(function(){
    Route::get('ratedcourses', 'getRatedCourses');
});

Route::resource('questions', QuestionController::class);

Route::resource('users', UserController::class);

Route::resource('reviews', ReviewController::class);
Route::controller(ReviewController::class)->group(function(){
    Route::get('faculty/{id}/reviews', 'showFacultyReviews');
    Route::get('courses/{id}/reviews', 'showCourseReviews');
});

Route::controller(FakeUserController::class)->group(function() {
    Route::post('user/login', 'login');
});


Route::get('/', function () {
    return view('welcome');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
