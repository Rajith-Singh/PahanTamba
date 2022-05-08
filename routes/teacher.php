<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\AtReportController;

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

        Route::get('/notice', function () {
            return view('dashboard.teacher.notice');
        });

        //manage notice
        Route::get('/manage-notice', function () {
        $notice=App\Models\Notice::all();
        return view('dashboard.teacher.manage-notice')->with('notice', $notice);
        });

        //edit / delete view page route 
        Route::get('/edit-notice', function(){
        $notice=App\Models\Notice::all();
        return view('dashboard.teacher.edit-notice')->with('notice', $notice);
        });

        Route::get('/updateNotice/{id}', [NoticeController::class,'manageNotice']);


        //  attendance route
        // Route::get('/attendance', function () {
        //     return view('dashboard.teacher.attendance');
        // });

        Route::get('attendance', function () {
            $data=App\Models\Student::all();
            return view('dashboard.teacher.attendance')->with('attendance',$data);
        });
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
        // Route::get('/updateTimetable/{id}', [TimetableController::class,'manageTime']);
        // Route::post('/updateT', [TimetableController::class,'updateshow'])->name('updateshow');


        Route::post('/updateT', [TimetableController::class,'updateshow'])->name('updateshow');

        Route::get('/updateT/{id}', [TimetableController::class,'manageTime']);


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



        Route::get('/common-class', function () {
            return view('dashboard.teacher.common-class');
        });
        

        //TimetableView Route
Route::get('/view-timetable', function(){

    $data=App\Models\CTimetable::all();
     return view('dashboard.teacher.TimetableView')->with('lesson', $data);
 });


       //get student report view route
        Route::get('/view-classReport', function () {
            return view('dashboard.teacher.classReport');
        });


        Route::get('/ClassReport-view', [LessonController::class, 'classRepo'])->name('classRepo');



        Route::get('/download-classReportpdf', [LessonController::class, 'export_pdf']);






    });

        //view notice
        // Route::get('/view-attendance', function () {
        //     $notice=App\Models\Attendance::all();
        //     return view('dashboard.teacher.view-attendance')->with('attendance', $attendance);
        //     });


        Route::get('/getAttendance', [NoticeController::class, 'getAttendance']);


        // Route::post('/storeAttendance', [AttendanceController::class, 'storeAttendance']);

        Route::get('/get-all-student', [AtReportController::class, 'getAllStudents']);


        // Route::get('/search', [NoticeController::class, 'search']);

    
});

 