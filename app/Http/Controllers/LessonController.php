<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lessons;
use App\Models\Timetables;
class LessonController extends Controller
{
    //

    public function LessonStore(Request $request){


        $request->validate([
           // 'file' => 'required|mimes:csv,txt,png,docx,jpg,mp4,xlx,xls,pdf|max:2048',
            'csubject'=>'required',
            'cDisease'=>'required',
            'clevel'=>'required',
            'cgrade'=>'required|min:1|max:5'
        ]);



        //dd($request)->all();
      //  $file=Lessons::all();
       // return view('studentLessonview', compact('file'));

        $fileModel = new Lessons;

        $file=$request->cfile;
      //  $Content=$request->Content;

        $fileName = time().'_'.$file->getClientOriginalName();

        $request->cfile->move('uploads/', $fileName);
        //$file = $request->file('file')->storeAs('uploads', $fileName, 'public');
        $fileModel->Content=$fileName;
       // $request->file->move('uploads/', $fileName);

        $fileModel->id= $request-> ClassID;
        $fileModel->Subject= $request-> csubject;
        $fileModel->Disease= $request-> cDisease;
        $fileModel->Level= $request-> clevel;
        $fileModel->Grade= $request-> cgrade;
       // $fileModel->Content= $request-> cfile;

        $fileModel->save();
       // $data->Lessons::all();
       return redirect()->back()->with('message', 'The lesson was added successfully to the system.');
       session()->flash('message',' lessons Added successfully!');
   // return view('updateLessons')->with('fileModel', $data);
   return view('viewLessons')->with('lesson', $data);
//return view('studentLessonview', compact('file'));


    }

    public function delete( $id)
    {
    
         $data=Lessons::find($id);
        $data->delete();
        session()->flash('message',' lessons deleted successfully!');
        return redirect()->back();
    }


    
    public function updateL($id)
    {
        $fileModel= Lessons::find($id);
        return view('Finalupdate-lessons',compact('fileModel'));
    }

    function updateshowLessons(Request $request)
    {
        $fileModel=Lessons::find($request->id);
        $fileModel->Subject= $request-> Ctsubject;
            $fileModel->Disease= $request-> cDisease;
          
           // $time->StartDate= $request-> ctgrade;
            $fileModel->Level= $request-> clevel;
            $fileModel->Grade= $request-> cgrade;
            $fileModel->Content= $request-> cfile('uploads/', $fileName);;
           

            //$data->file=$req->file ('uploads/', $fileName);
       
            if(@request->hasfile('Content')){
     
            }
            $fileModel->save();   
           
         //  CTimetable::update('update  c_timetables set Ctsubject=?, cttopic=?,sDate=?, clevel=?, ctSTime=?, eDate=?, ceTime=?, Ctlink=?, ctdescription=? where id=? '
       // [ " $time->Subject, $time->Topic, $time->StartDate,  $time->Level,  $time->StartTime,  $time->EndDate,  $time->EndTime,   $time->Link,        $time->Description " ]);
       session()->flash('message','Lessons updated successfully!');
       return redirect('/manage-lessons');
    }






    public function show($id)
    {
        $file=Lessons::find($id);
        return view('fileview', compact('file'));
    }


    public function downloadf($fileName)
    {
        return response()->download('uploads/'.$fileName);
    }
    








    
}
