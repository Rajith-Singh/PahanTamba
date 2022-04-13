<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\Teacher\TaskController;

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

        Route::get('/add-task', function () {
            return view('dashboard.teacher.add-task');
        });

    });
});