<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimetableController extends Controller
{
    public function LessonStore(Request $request){

        $time = new timetable;

        $time->id= $request-> ClassID;
    }
}
