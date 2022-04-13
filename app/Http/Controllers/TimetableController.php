<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Timetable;

class TimetableController extends Controller
{
    public function Timetablestore(Request $request){

        $time = new Timetable;

       // $time->increments('id');
        //$time->increments('TeacherId');
        $time->Subject= $request-> Ctsubject;
        $time->Topic= $request-> cttopic;
        $time->StartDate= $request-> sDate;
        $time->StartDate= $request-> ctgrade;
        $time->Level= $request-> clevel;

        $time->StartTime= $request-> ctSTime;

        $time->EndDate= $request-> eDate;
        $time->EndTime= $request-> ceTime;
       
        $time->Link= $request-> Ctlink;
        $time->Description= $request-> ctdescription;

        $time->save();

        return back()->with('msg', 'The Timetable was successfully created.');
    }



    
}
