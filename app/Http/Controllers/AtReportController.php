<?php

namespace App\Http\Controllers;

use DB;
use PDF;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Attendance;

class AtReportController extends Controller
{
    public function getAllStudents()
    {
        $data=Attendance::join('students', 'students.id', '=', 'attendances.student_id')
        ->select('students.fullname',
                 'attendances.attendance',
                 'attendances.created_at')
        ->get();

        $pdf = PDF::loadView('dashboard.teacher.view-attendance-pdf')->with('attendance',$data)->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('Attendance.pdf');
    }
}
