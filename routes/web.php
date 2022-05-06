<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\pagesController;


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

Route::get('/blacklist', function () {
    return view('blacklist');
});

Route::get('/view', function () {
    return view('view');
});

Route::get('/Addfees', function () {
    return view('Addfees');
});


Route::get('/Addpaymentdetails', function () {
    return view('Addpaymentdetails');
});

Route::post('/saveSalary',[pagesController::class,'storeSalary']);

Route::post('/updateSal', [pagesController::class, 'updateSal']);


//Route::get('/view-mangesalPage', function(){
//      $times=App\Models\Salary::all(); 
//    return view('managesal')->with('times', $times);
//})


//delete salary route
//Route::get('/deleteSal/{id}', [pagesController::class, 'deleteSal'])->name(deleteSal);








































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

Route::get('contact-us', function () {
    return view('contact-us');
});





// Auth::routes();






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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
