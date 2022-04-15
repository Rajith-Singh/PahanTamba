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

        //$file=$request->Content;

        //$fileName = time().'_'.$file->getClientOriginalName();
       // $request->file->move('uploads/', $fileName);

        $fileModel->id= $request-> ClassID;
        $fileModel->Subject= $request-> csubject;
        $fileModel->Disease= $request-> cDisease;
        $fileModel->Level= $request-> clevel;
        $fileModel->Grade= $request-> cgrade;
        $fileModel->Content= $request-> cfile;

        $fileModel->save();
       // $data->Lessons::all();

   // return view('updateLessons')->with('fileModel', $data);

//return view('studentLessonview', compact('file'));


    }

    public function delete( $id)
    {
    
         $data=Lessons::find($id);
        $data->delete();
        session()->flash('message',' lessons deleted successfully!');
        return redirect()->back();
    }


















    
}
