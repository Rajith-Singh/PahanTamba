<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Student\NoticeController;


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


    //view notice
    Route::get('/view-notice', function () {
        $notice=App\Models\Notice::all();
        return view('dashboard.student.view-notice')->with('notice', $notice);
        });
});