<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function storeTask(Request $request) {

        $request->validate([
            'taskClass' => 'required',
            'taskLevel' => 'required',
            'task' => 'required|min:10',
        ]);

        $task = new Task;

        $task->class=$request->taskClass;
        $task->level=$request->taskLevel;
        $task->task=$request->task;
        $task->save();

        return back()->with('msg', 'The task was successfully added.');
        //dd($request->all());
    }
}
