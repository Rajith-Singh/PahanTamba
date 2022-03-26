<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function storeTask(Request $request)
    {
        $task = new Task;

        $task->class=$request->taskClass;
        $task->level=$request->taskLevel;
        $task->task=$request->task;
        $task->save();
        //dd($request->all());
    }
}
