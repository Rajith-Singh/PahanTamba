<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Student\NoticeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\LessonController;
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


    //view notice
    Route::get('/view-notice', function () {
        $notice=App\Models\Notice::all();
        return view('dashboard.student.view-notice')->with('notice', $notice);
        });
    //View activities
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

    //View games
    Route::get('/view-games', [GameController::class, 'viewGames']);

    //Store games
    Route::post('/saveanswer', [GameController::class, 'addanswer']);

    //View students 
    Route::get('my-result', function () {
        return view('dashboard.student.my-result');
    });

    //View students results
    Route::get('view-result', function () {
        return view('dashboard.student.view-result');
    });
    
    //View students results
    Route::get('/viewResults/{id}', [GameController::class, 'gameScore']);

    //Get tasks from relevant students
    Route::get('/getStudentTask/{id}', [TaskController::class, 'getStudentTask']);

    //Get students results
    Route::get('view-result', function () {
        return view('dashboard.student.upload-std-answer');
    });

    //View success message
    Route::get('submit-message', function () {
        return view('dashboard.student.submit-message');
    });

    //View relevent student's progress report 
    Route::get('std-progress-report', function () {
        return view('dashboard.student.std-progress-report');
    });

    Route::get('/viewProgressReport/{id}', [TaskController::class, 'viewProgressReport']);

    Route::get('/search', [TaskController::class, 'searchResult']);
    Route::get('/Progress-report-pdf/{id}', [TaskController::class, 'downloadProgressReport']);

    Route::get('songs-games', function () {
        return view('dashboard.student.songs-games');
    });

    //View songs
    Route::get('/view-songs', [GameController::class, 'viewSongs']);
    
    // Route::get('view-games', function () {
    //     return view('dashboard.student.view-games');
    // });

    // Route::get('view-games', function () {
    //     $data=App\Models\Game::all();
    //     return view('dashboard.student.view-games')->with('game',$data);
    // });

    



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