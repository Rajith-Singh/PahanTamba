<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\StdTaskAnswer;
use App\Models\FinalResult;

class TaskController extends Controller
{
    public function storeTask(Request $request) {

        $request->validate([
            'taskClass' => 'required',
            'taskLevel' => 'required',
            'taskTitle' => 'required',
            'task' => 'required|min:10',
        ]);

        $task = new Task;

        $task->class=$request->taskClass;
        $task->level=$request->taskLevel;
        $task->title=$request->taskTitle;
        $task->task=$request->task;
        $task->save();

        return back()->with('msg', 'The task was successfully added.');
        //dd($request->all());
    }

    public function autismTasksLevel1(Request $request) {
        $data=Task::all()->where('class', '=', 'Autism')
                        ->where('level', '=', 'Level 1');
        return view('dashboard.teacher.manage-autism-tasks-level1')->with('viewTasks',$data);
    }

    public function autismTasksLevel2(Request $request) {
        $data=Task::all()->where('class', '=', 'Autism')
                        ->where('level', '=', 'Level 2');
        return view('dashboard.teacher.manage-autism-tasks-level2')->with('viewTasks',$data);
    }

    public function autismTasksLevel3(Request $request) {
        $data=Task::all()->where('class', '=', 'Autism')
                        ->where('level', '=', 'Level 3');
        return view('dashboard.teacher.manage-autism-tasks-level2')->with('viewTasks',$data);
    }


    public function downSyndromeTasksLevel1(Request $request) {
        $data=Task::all()->where('class', '=', 'Down syndrome')
                        ->where('level', '=', 'Level 1');
        return view('dashboard.teacher.manage-down-syndrome-tasks-level1')->with('viewTasks',$data);
    }


    public function downSyndromeTasksLevel2(Request $request) {
        $data=Task::all()->where('class', '=', 'Down syndrome')
                        ->where('level', '=', 'Level 2');
        return view('dashboard.teacher.manage-down-syndrome-tasks-level2')->with('viewTasks',$data);
    }
    

    public function downSyndromeTasksLevel3(Request $request) {
        $data=Task::all()->where('class', '=', 'Down syndrome')
                        ->where('level', '=', 'Level 3');
        return view('dashboard.teacher.manage-down-syndrome-tasks-level3')->with('viewTasks',$data);
    }


    public function hyperactiveTasksLevel1(Request $request) {
        $data=Task::all()->where('class', '=', 'Hyperactive')
                        ->where('level', '=', 'Level 1');
        return view('dashboard.teacher.manage-hyperactive-tasks-level1')->with('viewTasks',$data);
    }


    public function hyperactiveTasksLevel2(Request $request) {
        $data=Task::all()->where('class', '=', 'Hyperactive')
                        ->where('level', '=', 'Level 2');
        return view('dashboard.teacher.manage-hyperactive-tasks-level2')->with('viewTasks',$data);
    }
    
    public function hyperactiveTasksLevel3(Request $request) {
        $data=Task::all()->where('class', '=', 'Hyperactive')
                        ->where('level', '=', 'Level 3');
        return view('dashboard.teacher.manage-hyperactive-tasks-level3')->with('viewTasks',$data);
    }

    public function deleteTask($id){
        DB::table('tasks')->where('id',$id)->delete();
        return back()->with('deleteTask')->with('message', 'The task was successfully deleted.');
    }

    
    public function editTask($id){
        $data = DB::table('tasks')->where('id',$id)->first();
        return view('dashboard.teacher.edit-task', compact('data'));
    }


    public function updateTask(Request $request){

        $request->validate([
            'taskClass' => 'required',
            'taskLevel' => 'required',
            'task' => 'required|min:10',
        ]);

        DB::table('tasks')->where('id', $request->id)->update([
            'class'=>$request->taskClass,
            'level'=>$request->taskLevel,
            'task'=>$request->task,
        ]);
        return redirect()->to('/teacher/view-category')->with('message', 'The task was successfully updated.');
    }

    public function viewAct($diseasestype) {

        $data = DB::table('tasks')
        ->select('class')
        ->where('class', '=', $diseasestype)
        ->pluck('class')
        ->first(); 

        if($data == 'Autism'){
            return view('dashboard.student.autism-activities-home');
        } else if($data == 'Downsyndrom'){
            return view('dashboard.student.down-syndrome-activities-home');
        } else {
            return view('dashboard.student.hyperactive-activities-home');
        }
    }

    public function viewActivities($diseasestype, $diseaseslevel) {
        $data=Task::all()->where('class', '=', $diseasestype)
                        ->where('level', '=', $diseaseslevel);
        return view('dashboard.student.view-activities')->with('activities',$data);
    }    


    public function viewdactivities($ddiseasestype, $ddiseaseslevel) {
        $data=Task::all()->where('class', '=', $ddiseasestype)
                        ->where('level', '=', $ddiseaseslevel);
        return view('dashboard.student.view-d-activities')->with('activities',$data);
    }    

    public function viewaactivities($adiseasestype, $adiseaseslevel) {
        $data=Task::all()->where('class', '=', $adiseasestype)
                        ->where('level', '=', $adiseaseslevel);
        return view('dashboard.student.view-a-activities')->with('activities',$data);
    }   

    public function storeGame(Request $request){
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_'. time() . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=>1, 'url' => $url]);
        }
    }

    public function getStudentTask($task_id) {
        $data=Task::all()->where('id', '=', $task_id);
        return view('dashboard.student.upload-std-answer')->with('activities',$data);
    }   

    public function storeAnswer(Request $request) {

        $answer = new StdTaskAnswer;

        $answer->student_id=$request->std_id;
        $answer->task_id=$request->task_id;
        $answer->student_answer=$request->answer;
        $answer->save();

        return view('dashboard.student.submit-message');
        //dd($request->all());
    }
    
    public function getStdAns(Request $request) {

        $student = StdTaskAnswer::join('students', 'students.id', '=', 'std_task_answers.student_id')
                    ->select('students.fullname',
                            'students.diseasestype', 
                            'students.diseaseslevel', 
                            'std_task_answers.student_answer',
                            'std_task_answers.task_id',
                            'std_task_answers.student_id',
                            )
                    ->get();

        return view("dashboard.teacher.view-answer-list",compact('student'));                      

    }


    public function getAnswers($std_id,$task_id) {

        $student = StdTaskAnswer::join('students', 'students.id', '=', 'std_task_answers.student_id')
                    ->join('tasks', 'tasks.id', '=', 'std_task_answers.task_id')
                    ->select('students.fullname',
                            'students.id',
                            'students.diseasestype', 
                            'students.diseaseslevel', 
                            'tasks.task',
                            'std_task_answers.student_answer',
                            'std_task_answers.task_id',
                            'std_task_answers.student_id',
                            )
                    ->where('std_task_answers.student_id', '=', $std_id)     
                    ->where('std_task_answers.task_id', '=', $task_id)        
                    ->get();

        return view("dashboard.teacher.add-result",compact('student'));                      

    }

    public function storeFinalMarks(Request $request) {

        $final = new FinalResult;

        $final->student_id=$request->std_id;
        $final->task_id=$request->task_id;
        $final->mark=$request->stdMarks;
        $final->feedback=$request->stdFeedback;
        $final->save();

        return view('dashboard.teacher.submit-results');
    }

}
