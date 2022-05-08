<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

use App\Http\Controllers\LessonController; 

use App\Http\Controllers\TimetableController; 

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

//added
Route::get('/add-lessons', function () {
    return view('AddLessons');
});
//added
Route::get('/create-timetable', function () {
    return view('create-timetable');
});


//***added */
//insert timetable
Route::post('/timetable-store', [TimetableController::class, 'Timetablestore']);


//*****added */
//manage timetable
Route::get('/manage-timetable', function () {
    $time=App\Models\CTimetable::all();
    return view('manage-timetable')->with('time', $time);
});

// Route::get('/manage-timetable', function () {

//     $time=App\Models\CTimetable::all();

//     return view('manage-timetable')->with('time', $time);

//     });


//Route::get('/updateTimetable/{id}', [TimetableController::class,'manageTime']);
Route::post('/updateT', [TimetableController::class,'updateshow'])->name('updateshow');

Route::get('/updateT/{id}', [TimetableController::class,'manageTime']);

//***added */
//delete timetable
Route::get('/delete/{id}', [TimetableController::class, 'delete'])->name('delete');

Route::get('/common-class', function () {
    return view('common-class');
});


//added
//update lesson view pGE Route
Route::get('/updateLessons', function () {
    return view('Finalupdate-lessons');
});

//update - lessons 
Route::get('/updateLessons/{id}', [LessonController::class,'updateL']);
Route::post('/updateL', [LessonController::class,'updateshowLessons'])->name('updateshowLessons');


//****added */
//insert lessons
Route::post('/Lesson-store', [LessonController::class, 'LessonStore']);



//******88added */
//edit / delete view page route 
Route::get('/edit-lesson', function(){

   $data=App\Models\Lessons::all();
    return view('updateLessons')->with('lesson', $data);
});



//student view lessons route
//Route::get('/view-lessons', function () {
 //   return view('viewLessons');
//});


//**** Added */
//student view-lesson common interface Route
Route::get('/viewL-comInterface', function () {
    return view('View-LessonCommonStudentnterface');
});

//*added
//student view lessons route
Route::get('/view-lessons', function(){

    $data=App\Models\Lessons::all();
     return view('viewLessons')->with('lesson', $data);
 });
 

 //addded
 //view report
 Route::get('/ClassReport-view', [LessonController::class, 'classRepo'])->name('classRepo');

 Route::get('/download-classReportpdf', [LessonController::class, 'export_pdf']);

 
 //***Added */
  //search lessons
  Route::post('/search-lessons',[LessonController::class, 'searchL'])->name('searchL');


/// //report search
Route::get('/searchStID', [LessonController::class, 'searchStID'])->name('searchStID');





//**added */
//filter lessons
Route::get('/filter-lessons ', function () {
    return view('FilterLessons');
});


//added
  //search lessons
  Route::post('/search-Level',[LessonController::class, 'searchLevel'])->name('searchLevel');


//comon diseases (in order to go to view lessons)
Route::get('/common-lessons ', function () {
    return view('commondiseasesInterface');
});





//added
//TimetableView Route

Route::get('/view-timetable', function(){

    $data=App\Models\CTimetable::all();
     return view('TimetableView')->with('lesson', $data);
 });

//added
        //file seen all
        Route::get('/file', [LessonController::class, 'index'])->name('index');
        Route::get('/view/{id}', [LessonController::class, 'show'])->name('show');
        Route::get('/file/download/{file}', [LessonController::class, 'downloadf'])->name('downloadf');          














//****added */
   //delete lessons
   Route::get('/deleteL/{id}', [LessonController::class, 'delete'])->name('delete');

Auth::routes([
    'verify' => true
]);


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//                         //User//

// Route::prefix('user')->name('user.')->group(function(){
  
//     Route::middleware(['guest:web', 'PreventBackHistory'])->group(function(){
//         Route::view('/login','dashboard.user.login')->name('login');
//         Route::view('/register','dashboard.user.register')->name('register');
//         Route::post('/create',[UserController::class,'create'])->name('create');
//         Route::post('/check',[UserController::class,'check'])->name('check');
//     });

//     Route::middleware(['auth:web', 'PreventBackHistory'])->group(function(){
//         Route::view('/home','dashboard.user.home')->name('home');
//         Route::post('/logout',[UserController::class,'logout'])->name('logout');
//     });

// });

//                     //Teacher//


// Route::prefix('teacher')->name('teacher.')->group(function(){

//     Route::middleware(['guest:teacher','PreventBackHistory'])->group(function(){
//         Route::view('/login','dashboard.teacher.login')->name('login');
//         Route::view('/register','dashboard.teacher.register')->name('register');
//         Route::post('/create',[TeacherController::class,'create'])->name('create');
//         Route::post('/check',[TeacherController::class,'check'])->name('check');

//     });

//     Route::middleware(['auth:teacher','PreventBackHistory'])->group(function(){
//         Route::view('/home','dashboard.teacher.home')->name('home');
//         Route::post('/logout',[TeacherController::class,'logout'])->name('logout');

//     });
// });


//                         //Student//

// Route::prefix('student')->name('student.')->group(function(){
    
//     Route::middleware(['guest:student','PreventBackHistory'])->group(function(){
//         Route::view('/login','dashboard.student.login')->name('login');
//         Route::view('/register','dashboard.student.register')->name('register');
//         Route::post('/create',[StudentController::class,'create'])->name('create');
//         Route::post('/check',[StudentController::class,'check'])->name('check'); 

//     });

//     Route::middleware(['auth:student','PreventBackHistory'])->group(function(){
//         Route::view('/home','dashboard.student.home')->name('home');
//         Route::post('/logout',[StudentController::class,'logout'])->name('logout');

//     });
// });


Route::get('/test2', function () {
    return view('test2');
});

Route::get('/add-task', function () {
    return view('add-task');
});

Route::get('/add-result', function () {
    return view('add-result');
});

Route::post('/saveTask',[TaskController::class,'storeTask']);

Route::get('view-category', function () {
    return view('view-category');
});

Route::get('autism-level', function () {
    return view('autism-level');
});

Route::get('down-syndrome-level', function () {
    return view('down-syndrome-level');
});

Route::get('hyperactive-level', function () {
    return view('hyperactive-level');
});

Route::get('manage-autism-tasks-level1', function () {
    $data=App\Models\Task::all()->where('class', '=', 'Autism')->where('level', '=', 'Level 1');
    return view('manage-autism-tasks-level1')->with('viewTasks',$data);
});

Route::get('manage-autism-tasks-level2', function () {
    $data=App\Models\Task::all()->where('class', '=', 'Autism')->where('level', '=', 'Level 2');
    return view('manage-autism-tasks-level2')->with('viewTasks',$data);
});

Route::get('manage-autism-tasks-level3', function () {
    $data=App\Models\Task::all()->where('class', '=', 'Autism')->where('level', '=', 'Level 3');
    return view('manage-autism-tasks-level3')->with('viewTasks',$data);
});

Route::get('manage-down-syndrome-tasks-level1', function () {
    $data=App\Models\Task::all()->where('class', '=', 'Down syndrome')->where('level', '=', 'Level 1');
    return view('manage-down-syndrome-tasks-level1')->with('viewTasks',$data);
});

Route::get('manage-down-syndrome-tasks-level2', function () {
    $data=App\Models\Task::all()->where('class', '=', 'Down syndrome')->where('level', '=', 'Level 2');
    return view('manage-down-syndrome-tasks-level2')->with('viewTasks',$data);
});

Route::get('manage-down-syndrome-tasks-level3', function () {
    $data=App\Models\Task::all()->where('class', '=', 'Down syndrome')->where('level', '=', 'Level 3');
    return view('manage-down-syndrome-tasks-level3')->with('viewTasks',$data);
});

Route::get('manage-hyperactive-tasks-level1', function () {
    $data=App\Models\Task::all()->where('class', '=', 'Hyperactive')->where('level', '=', 'Level 3');
    return view('manage-hyperactive-tasks-level1')->with('viewTasks',$data);
});

Route::get('manage-hyperactive-tasks-level2', function () {
    $data=App\Models\Task::all()->where('class', '=', 'Hyperactive')->where('level', '=', 'Level 2');
    return view('manage-hyperactive-tasks-level2')->with('viewTasks',$data);
});

Route::get('manage-hyperactive-tasks-level3', function () {
    $data=App\Models\Task::all()->where('class', '=', 'Hyperactive')->where('level', '=', 'Level 3');
    return view('manage-hyperactive-tasks-level3')->with('viewTasks',$data);
});

Route::get('select-login-type', function () {
    return view('select-login-type');
});

Route::get('ftf-activity', function () {
    return view('face-to-face-activities');
});

Route::post('/updateTask', [TaskController::class, 'updateTask']);

Route::get('contact-us', function () {
    return view('contact-us');
});





// Auth::routes();

Auth::routes([
    'verify' => true
]);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//                         //User//

// Route::prefix('user')->name('user.')->group(function(){
  
//     Route::middleware(['guest:web', 'PreventBackHistory'])->group(function(){
//         Route::view('/login','dashboard.user.login')->name('login');
//         Route::view('/register','dashboard.user.register')->name('register');
//         Route::post('/create',[UserController::class,'create'])->name('create');
//         Route::post('/check',[UserController::class,'check'])->name('check');
//     });

//     Route::middleware(['auth:web', 'PreventBackHistory'])->group(function(){
//         Route::view('/home','dashboard.user.home')->name('home');
//         Route::post('/logout',[UserController::class,'logout'])->name('logout');
//     });

// });

//                     //Teacher//


// Route::prefix('teacher')->name('teacher.')->group(function(){

//     Route::middleware(['guest:teacher','PreventBackHistory'])->group(function(){
//         Route::view('/login','dashboard.teacher.login')->name('login');
//         Route::view('/register','dashboard.teacher.register')->name('register');
//         Route::post('/create',[TeacherController::class,'create'])->name('create');
//         Route::post('/check',[TeacherController::class,'check'])->name('check');

//     });

//     Route::middleware(['auth:teacher','PreventBackHistory'])->group(function(){
//         Route::view('/home','dashboard.teacher.home')->name('home');
//         Route::post('/logout',[TeacherController::class,'logout'])->name('logout');

//     });
// });


//                         //Student//

// Route::prefix('student')->name('student.')->group(function(){
    
//     Route::middleware(['guest:student','PreventBackHistory'])->group(function(){
//         Route::view('/login','dashboard.student.login')->name('login');
//         Route::view('/register','dashboard.student.register')->name('register');
//         Route::post('/create',[StudentController::class,'create'])->name('create');
//         Route::post('/check',[StudentController::class,'check'])->name('check'); 

//     });

//     Route::middleware(['auth:student','PreventBackHistory'])->group(function(){
//         Route::view('/home','dashboard.student.home')->name('home');
//         Route::post('/logout',[StudentController::class,'logout'])->name('logout');

//     });
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
