<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\LessonController;




                //Student//

Route::prefix('student')->name('student.')->group(function(){

    Route::middleware(['guest:student','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.student.login')->name('login');
        Route::view('/register','dashboard.student.register')->name('register');
        Route::post('/create',[StudentController::class,'create'])->name('create');
        Route::post('/check',[StudentController::class,'check'])->name('check'); 
        Route::get('/verify',[StudentController::class,'verify'])->name('verify');
    
        Route::get('/password/forgot',[StudentController::class,'showForgotForm'])->name('forgot.password.form');
        Route::post('/password/forgot',[StudentController::class,'sendResetLink'])->name('forgot.password.link');
        Route::get('/password/reset/{token}',[StudentController::class,'showResetForm'])->name('reset.password.form');
        Route::post('/password/reset',[StudentController::class,'resetPassword'])->name('reset.password');
    });


    Route::middleware(['auth:student','is_student_verify_email','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.student.home')->name('home');
        Route::post('/logout',[StudentController::class,'logout'])->name('logout');

    });

    Route::get('autism-activities-home', function () {
        return view('dashboard.student.autism-activities-home');
    });

    Route::get('down-syndrome-activities-home', function () {
        return view('dashboard.student.down-syndrome-activities-home');
    });

    Route::get('hyperactive-activities-home', function () {
        return view('dashboard.student.hyperactive-activities-home');
    });

    Route::get('/viewAct/{diseasestype}', [TaskController::class, 'viewAct']);

    Route::get('/viewActivities/{diseasestype}/{diseaseslevel}', [TaskController::class, 'viewActivities']);

    Route::get('/viewdactivities/{ddiseasestype}/{ddiseaseslevel}', [TaskController::class, 'viewdactivities']);

    Route::get('/viewaactivities/{adiseasestype}/{adiseaseslevel}', [TaskController::class, 'viewaactivities']);

    Route::get('instructions', function () {
        return view('dashboard.student.instructions');
    });

    



    //---------------------------------Dulsara----------------------------------------------------------------------
   //student view lessons route
Route::get('/view-lessons', function(){

    $data=App\Models\Lessons::all();
     return view('dashboard.student.viewLessons')->with('lesson', $data);
 });

//student view-lesson common interface Route
Route::get('/viewL-comInterface', function () {
    return view('dashboard.student.View-LessonCommonStudentnterface');
});



//student view-lesson common interface Route
Route::get('/viewL-comInterface', function () {
    return view('dashboard.student.View-LessonCommonStudentnterface');
});


 
  //search lessons
  Route::post('/search-lessons',[LessonController::class, 'searchL'])->name('searchL');


//filter lessons
Route::get('/filter-lessons ', function () {
    return view('dashboard.student.FilterLessons');
});


//TimetableView Route
Route::get('/view-timetable', function(){

    $data=App\Models\CTimetable::all();
     return view('dashboard.student.TimetableView')->with('lesson', $data);
 });


        //file seen all
        Route::get('/file', [LessonController::class, 'index'])->name('index');
        Route::get('/view/{id}', [LessonController::class, 'show'])->name('show');
        Route::get('/file/download/{file}', [LessonController::class, 'downloadf'])->name('downloadf');          





  //search level
  Route::post('/search-Level',[LessonController::class, 'searchLevel'])->name('searchLevel');


//comon diseases (in order to go to view lessons)
Route::get('/common-lessons ', function () {
    return view('dashboard.student.commondiseasesInterface');
});


});