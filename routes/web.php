<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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
