<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\Models\CTimetable;

class TimetableController extends Controller
{
    public function Timetablestore(Request $request){

//dd($request->all());
        $request->validate([
            'Ctsubject' => 'required',
            'cttopic' => 'required',
            'sDate' => 'required|min:10',
            'cttopic' => 'required',
            'sDate' => 'required',
            'clevel' => 'required',
            'ctSTime' => 'required',
            'eDate' => 'required',
            'ceTime' => 'required',
            'Ctlink' => 'required',
            'ctdescription' => 'required',
        ]);


        $time = new CTimetable;
        $time->Subject= $request-> Ctsubject;
        $time->Topic= $request-> cttopic;
        $time->StartDate= $request-> sDate;
       // $time->StartDate= $request-> ctgrade;
        $time->Level= $request-> clevel;
        $time->StartTime= $request-> ctSTime;
        $time->EndDate= $request-> eDate;
        $time->EndTime= $request-> ceTime;
        $time->Link= $request-> Ctlink;
        $time->Description= $request-> ctdescription;
        $time->save();

       //return view('manage-timetable')->with('time', $time);
       session()->flash('message','Timetable created successfully!');
       return redirect()->back()->with('message', 'The Timetable details were added successfully to the system.');
    }

public function manageTime($id){

    $time= CTimetable::find($id);
    //session()->flash('message','Timetable updated successfully!');
    return view('dashboard.teacher.editTimetable',['time'=>$time]);
}



 function updateshow(Request $request)
{


    {

        DB::table('c_timetables')->where('id', $request->id)->update([

           'Subject'=>$request->Ctsubject,

           'Topic'=>$request->cttopic,

           'StartDate'=>$request->sDate,
           'Level'=>$request->clevel,
           'StartTime'=>$request->ctSTime,
           'EndDate'=>$request->eDate,
           'Link'=>$request->Ctlink,
           'Description'=>$request->ctdescription,
           
       ]);

return redirect()->to('/manage-timetable')->with('message', 'The Timetable was successfully updated.');
//    return redirect('/manage-timetable')->with('message', 'The lesson was updated successfully.');
}
}



public function delete($id){
    $time=CTimetable::find($id);
    $time->delete();
    session()->flash('message','Timetable deleted successfully!');
    return redirect()->back()->with('message', 'The Timetable was deleted successfully from the system.');
}








}
