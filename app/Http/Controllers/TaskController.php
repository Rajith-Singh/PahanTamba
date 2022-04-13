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

    public function autismTasksLevel1(Request $request) {
        $data=Task::all()->where('class', '=', 'Autism')
                        ->where('level', '=', 'Level 1');
        return view('manage-autism-tasks-level1')->with('viewTasks',$data);
    }

    public function autismTasksLevel2(Request $request) {
        $data=Task::all()->where('class', '=', 'Autism')
                        ->where('level', '=', 'Level 2');
        return view('manage-autism-tasks-level2')->with('viewTasks',$data);
    }

    public function autismTasksLevel3(Request $request) {
        $data=Task::all()->where('class', '=', 'Autism')
                        ->where('level', '=', 'Level 3');
        return view('manage-autism-tasks-level2')->with('viewTasks',$data);
    }


    public function downSyndromeTasksLevel1(Request $request) {
        $data=Task::all()->where('class', '=', 'Down syndrome')
                        ->where('level', '=', 'Level 1');
        return view('manage-down-syndrome-tasks-level1')->with('viewTasks',$data);
    }


    public function downSyndromeTasksLevel2(Request $request) {
        $data=Task::all()->where('class', '=', 'Down syndrome')
                        ->where('level', '=', 'Level 2');
        return view('manage-down-syndrome-tasks-level2')->with('viewTasks',$data);
    }
    

    public function downSyndromeTasksLevel3(Request $request) {
        $data=Task::all()->where('class', '=', 'Down syndrome')
                        ->where('level', '=', 'Level 3');
        return view('manage-down-syndrome-tasks-level3')->with('viewTasks',$data);
    }


    public function hyperactiveTasksLevel1(Request $request) {
        $data=Task::all()->where('class', '=', 'Hyperactive')
                        ->where('level', '=', 'Level 1');
        return view('manage-hyperactive-tasks-level1')->with('viewTasks',$data);
    }


    public function hyperactiveTasksLevel2(Request $request) {
        $data=Task::all()->where('class', '=', 'Hyperactive')
                        ->where('level', '=', 'Level 2');
        return view('manage-hyperactive-tasks-level2')->with('viewTasks',$data);
    }
    
    public function hyperactiveTasksLevel3(Request $request) {
        $data=Task::all()->where('class', '=', 'Hyperactive')
                        ->where('level', '=', 'Level 3');
        return view('manage-hyperactive-tasks-level3')->with('viewTasks',$data);
    }
}
