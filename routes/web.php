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


Route::get('/class', function () {
    return view('AddLessons');
});

Route::get('/timetable', function () {
    return view('create-timetable');
});


Route::get('/common-class', function () {
    return view('common-class');
});


Route::get('/teacher-timetable', function () {
    return view('TeacherTimetable');
});