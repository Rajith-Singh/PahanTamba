<?php

use Illuminate\Support\Facades\Route;


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