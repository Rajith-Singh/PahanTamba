<?php

namespace App\Http\Controllers;

use DB;
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


            public function deleteSal($id){
                DB::table('salaries')->where('id',$id)->delete();
                return back()->with('message', 'The salary was successfully deleted.');;
                // $data = Salary::find($id);
                // $data->delete();
                //return redirect()->back();
            }


            public function editSal($id){
                $data = DB::table('salaries')->where('id',$id)->first();
                return view('dashboard.user.editsal', compact('data'));
            }

            public function updateSal(Request $request){
                $request->validate([
                    'teacherName' => 'required',
                    'teacherClass' => 'required',
                    'classLevel' => 'required',
                    'salaryMonth' => 'required',
                    'salary' => 'required',
                ]);

                DB::table('salaries')->where('id', $request->id)->update([
                    'name'=>$request->teacherName,
                    'class'=>$request->teacherClass,
                    'level'=>$request->classLevel,
                    'month'=>$request->salaryMonth,
                    'salary'=>$request->salary,
                    'note'=>$request->note,
                ]);
                return redirect()->to('/user/managesal')->with('message', 'The salary details was successfully updated.');
            }  
            

}
