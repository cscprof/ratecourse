<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FakeUserController;
use App\Http\Controllers\FacultyQuestionController;
use App\Http\Controllers\CourseQuestionController;

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
Route::resource('coursequestions', CourseQuestionController::class);
Route::resource('facultyquestions', FacultyQuestionController::class);

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
