<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\TeacherController;


 //Teacher//


 Route::prefix('teacher')->name('teacher.')->group(function(){

    Route::middleware(['guest:teacher','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.teacher.login')->name('login');
        Route::view('/register','dashboard.teacher.register')->name('register');
        Route::post('/create',[TeacherController::class,'create'])->name('create');
        Route::post('/check',[TeacherController::class,'check'])->name('check');
        Route::get('/verify',[TeacherController::class,'verify'])->name('verify');


        Route::get('/password/forgot',[TeacherController::class,'showForgotForm'])->name('forgot.password.form');
        Route::post('/password/forgot',[TeacherController::class,'sendResetLink'])->name('forgot.password.link');
        Route::get('/password/reset/{token}',[TeacherController::class,'showResetForm'])->name('reset.password.form');
        Route::post('/password/reset',[TeacherController::class,'resetPassword'])->name('reset.password');
    });

    Route::middleware(['auth:teacher','is_teacher_verify_email','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.teacher.home')->name('home');
        Route::post('/logout',[TeacherController::class,'logout'])->name('logout');


        Route::get('/create-timetable', function () {
            return view('dashboard.teacher.create-timetable');
        });
        
        Route::get('/add-lessons', function () {
            return view('dashboard.teacher.AddLessons');
        });
        //insert lessons
        Route::post('/Lesson-store', [LessonController::class, 'LessonStore']);

        //delete lessons
        Route::get('/deleteL/{id}', [LessonController::class, 'delete'])->name('delete');

        //timetable-----------
        Route::get('/create-timetable', function () {
         return view('dashboard.teacher.create-timetable');
        });

        
        //insert timetable
        Route::post('/timetable-store', [TimetableController::class, 'Timetablestore']);
 
        //delete timetable
        Route::get('/delete/{id}', [TimetableController::class, 'delete'])->name('delete');

        
        //timetable adding form view
        Route::get('/create-timetable', function () {
            return view('dashboard.teacher.create-timetable');
        });

        //insert timetable
        Route::post('/timetable-store', [TimetableController::class, 'Timetablestore']);

        //manage timetable
        Route::get('/manage-timetable', function () {
        $time=App\Models\CTimetable::all();
        return view('dashboard.teacher.manage-timetable')->with('time', $time);
        });

        
        //update timetable
        Route::get('/updateTimetable/{id}', [TimetableController::class,'manageTime']);
        Route::post('/updateT', [TimetableController::class,'updateshow'])->name('updateshow');



        //delete timetable
        Route::get('/delete/{id}', [TimetableController::class, 'delete'])->name('delete');


        //update lesson view pGE Route
        Route::get('/updateLessons', function () {
        return view('dashboard.teacher.Finalupdate-lessons');
        });


        //edit / delete view page route 
        Route::get('/edit-lesson', function(){

         $data=App\Models\Lessons::all();
        return view('dashboard.teacher.updateLessons')->with('lesson', $data);
        });


        });
});