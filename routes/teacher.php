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

        //add tasks
        Route::get('/add-task', function () {
            return view('dashboard.teacher.add-task');
        });

        //view category
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

        Route::get('manage-games', function () {
            $data=App\Models\Game::all();
            return view('dashboard.teacher.manage-games')->with('game',$data);
        });
        

        //delete tasks
        Route::get('/deleteTask/{id}', [TaskController::class, 'deleteTask']);

        //edit tasks
        Route::get('/editTask/{id}', [TaskController::class, 'editTask']);

        //update tasks
        Route::post('/updateTask', [TaskController::class, 'updateTask']);

        //add games
        Route::get('game-handler', function () {
            return view('dashboard.teacher.game-handler');
        });

        //edit games
        Route::get('/editGame/{id}', [GameController::class, 'editGames']);

        //update games
        Route::post('/updateGame', [GameController::class, 'updateGame']);

        //delete games
        Route::get('/deleteGame/{id}', [GameController::class, 'deleteGame']);

        //view student's answers
        Route::get('view-answer-list', function () {
            return view('dashboard.teacher.view-answer-list');
        });

        Route::get('/getStdAns', [TaskController::class, 'getStdAns']);

        //Get relevant student's answers
        Route::get('/getAnswers/{std_id}/{task_id}', [TaskController::class, 'getAnswers']);

        //Add students results
        Route::get('add-result', function () {
            return view('dashboard.teacher.add-result');
        });

        Route::get('add-result', function () {
            return view('dashboard.teacher.submit-results');
        });

        //Search student's progress
        Route::get('/search', [TaskController::class, 'searchTasks']);
        
        // Route::resource('dashboard.teacher.game-handler','CkeditorController');

        //Save songs
        Route::post('/storeSong', [GameController::class, 'storeSong']);

        //Add songs
        Route::get('add-songs', function () {
            return view('dashboard.teacher.add-songs');
        });

        //View category
        Route::get('add-songs-and-games', function () {
            return view('dashboard.teacher.add-songs-and-games');
        });

    });
});