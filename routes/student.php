<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\GameController;




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

    Route::get('/view-games', [GameController::class, 'viewGames']);

    Route::post('/saveanswer', [GameController::class, 'addanswer']);

    Route::get('my-result', function () {
        return view('dashboard.student.my-result');
    });

    Route::get('view-result', function () {
        return view('dashboard.student.view-result');
    });
    

    Route::get('/viewResults/{id}', [GameController::class, 'gameScore']);

    Route::get('/getStudentTask/{id}', [TaskController::class, 'getStudentTask']);

    Route::get('view-result', function () {
        return view('dashboard.student.upload-std-answer');
    });

    Route::get('submit-message', function () {
        return view('dashboard.student.submit-message');
    });

    Route::get('std-progress-report', function () {
        return view('dashboard.student.std-progress-report');
    });

    Route::get('/viewProgressReport/{id}', [TaskController::class, 'viewProgressReport']);



    
    

    // Route::get('view-games', function () {
    //     return view('dashboard.student.view-games');
    // });

    // Route::get('view-games', function () {
    //     $data=App\Models\Game::all();
    //     return view('dashboard.student.view-games')->with('game',$data);
    // });

    
});