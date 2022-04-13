<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LessonController; 

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/add-lessons', function () {
    return view('AddLessons');
});

Route::get('/create-timetable', function () {
    return view('create-timetable');
});


Route::get('/common-class', function () {
    return view('common-class');
});


Route::get('/teacher-timetable', function () {
    return view('TeacherTimetable');
});


Route::get('/edit-lessons', function () {
    return view('TeacherTimetable');
});


Route::post('/Lesson-store', [LessonController::class, 'LessonStore']);

//edit lessons
Route::get('/edit-lesson', function(){

    $data=App\Models\Lessons::all();
    return view('updateLessons')->with('lesson', $data);
   });

   //delete lessons
   Route::get('/deleteL/{id}', [LessonController::class, 'delete'])->name('delete');