<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;

class pagesController extends Controller
{
       public function storeSalary(Request $request) {

              $request->validate([
                  'teacherName' => 'required',
                  'teacherClass' => 'required',
                  'classLevel' => 'required',
                  'salaryMonth' => 'required',
                  'salary' => 'required',
              ]);
      
              $salary = new Salary;
      
              $salary->name=$request->teacherName;
              $salary->class=$request->teacherClass;
              $salary->level=$request->classLevel;
              $salary->month=$request->salaryMonth;
              $salary->salary=$request->salary;
              $salary->note=$request->note;
              $salary->save();
      
              return back()->with('msg', 'The salary was successfully added.');
          }


          public function managesalary(Request $request) {
              $data=Salary::all();
              return view('dashboard.user.managesal')->with('viewSalary',$data);
          }






}
