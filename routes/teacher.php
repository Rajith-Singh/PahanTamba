<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CkeditorController;
use App\Http\Controllers\GameController;

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

        /////// Rajith's routes
        Route::get('/add-task', function () {
            return view('dashboard.teacher.add-task');
        });

        Route::get('view-category', function () {
            return view('dashboard.teacher.view-category');
        });

        Route::get('autism-level', function () {
            return view('dashboard.teacher.autism-level');
        });

        Route::get('down-syndrome-level', function () {
            return view('dashboard.teacher.down-syndrome-level');
        });

        Route::get('hyperactive-level', function () {
            return view('dashboard.teacher.hyperactive-level');
        });

        Route::get('manage-autism-tasks-level1', function () {
            $data=App\Models\Task::all()->where('class', '=', 'Autism')->where('level', '=', 'Level 1');
            return view('dashboard.teacher.manage-autism-tasks-level1')->with('viewTasks',$data);
        });

        Route::get('manage-autism-tasks-level2', function () {
            $data=App\Models\Task::all()->where('class', '=', 'Autism')->where('level', '=', 'Level 2');
            return view('dashboard.teacher.manage-autism-tasks-level2')->with('viewTasks',$data);
        });

        Route::get('manage-autism-tasks-level3', function () {
            $data=App\Models\Task::all()->where('class', '=', 'Autism')->where('level', '=', 'Level 3');
            return view('dashboard.teacher.manage-autism-tasks-level3')->with('viewTasks',$data);
        });
        
        Route::get('manage-down-syndrome-tasks-level1', function () {
            $data=App\Models\Task::all()->where('class', '=', 'Down syndrome')->where('level', '=', 'Level 1');
            return view('dashboard.teacher.manage-down-syndrome-tasks-level1')->with('viewTasks',$data);
        });
        
        Route::get('manage-down-syndrome-tasks-level2', function () {
            $data=App\Models\Task::all()->where('class', '=', 'Down syndrome')->where('level', '=', 'Level 2');
            return view('dashboard.teacher.manage-down-syndrome-tasks-level2')->with('viewTasks',$data);
        });
        
        Route::get('manage-down-syndrome-tasks-level3', function () {
            $data=App\Models\Task::all()->where('class', '=', 'Down syndrome')->where('level', '=', 'Level 3');
            return view('dashboard.teacher.manage-down-syndrome-tasks-level3')->with('viewTasks',$data);
        });
        
        Route::get('manage-hyperactive-tasks-level1', function () {
            $data=App\Models\Task::all()->where('class', '=', 'Hyperactive')->where('level', '=', 'Level 1');
            return view('dashboard.teacher.manage-hyperactive-tasks-level1')->with('viewTasks',$data);
        });
        
        Route::get('manage-hyperactive-tasks-level2', function () {
            $data=App\Models\Task::all()->where('class', '=', 'Hyperactive')->where('level', '=', 'Level 2');
            return view('dashboard.teacher.manage-hyperactive-tasks-level2')->with('viewTasks',$data);
        });
        
        Route::get('manage-hyperactive-tasks-level3', function () {
            $data=App\Models\Task::all()->where('class', '=', 'Hyperactive')->where('level', '=', 'Level 3');
            return view('dashboard.teacher.manage-hyperactive-tasks-level3')->with('viewTasks',$data);
        });

        Route::get('/deleteTask/{id}', [TaskController::class, 'deleteTask']);

        Route::get('/editTask/{id}', [TaskController::class, 'editTask']);

        Route::post('/updateTask', [TaskController::class, 'updateTask']);

        Route::get('game-handler', function () {
            return view('dashboard.teacher.game-handler');
        });



        // Route::resource('dashboard.teacher.game-handler','CkeditorController');


    });
});