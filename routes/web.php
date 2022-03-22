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


Route::get('/student-registation', function () {
    return view('stdreg');
});


Route::get('/teacher-registation', function () {
    return view('treg');
});


// Route::get('/attendance-sheet', function () {
//     return view('attendance');
// });

