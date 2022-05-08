<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\Student;
use App\Models\Attendance;



class NoticeController extends Controller
{
    public function storeNotice(Request $request) {

        $request->validate([
            
            'diseasesLevel' => 'required',
            'diseasesClass' => 'required',
            'message' => 'required|min:10',
        ]);

        $notice = new Notice;

        $notice->DiseasesLevel=$request->diseasesLevel;
        $notice->DiseasesClass=$request->diseasesClass;
        $notice->Message=$request->message;
        $notice->save();


        session()->flash('message','Notice Added successfully!');
        return redirect()->back()->with('message', 'The Notice was added successfully from the system.');
    }



        public function manageNotice($id){

                $notice= Notice::find($id);
                return view('edit-notice',['notice'=>$notice]);
            }


        function updateshow(Request $request)
            {
             DB::table('notices')->where('id', $request->id)->update([
                'DiseasesLevel'=>$request->diseasesLevel,
                'DiseasesClass'=>$request->diseasesClass,
                'Message'=>$request->message,
    
            ]);
    
            return redirect()->to('/teacher/manage-notice')->with('message', 'The notice was successfully updated.');
    
        }


        public function delete($id){
                $notice=Notice::find($id);
                $notice->delete();
                session()->flash('message','Notice deleted successfully!');
                return redirect()->back()->with('message', 'The Notice was deleted successfully from the system.');
            }

        
            public function getStdList(Request $request) {
                $data=Student::all();
                return view('dashboard.teacher.attendance')->with('attendance',$data);
            }   
            
            public function storeAttendance(Request $request){

                $std_id = $request->std_id;
                $checkbox = $request->checkbox;
              

            for($i=0; $i<count($std_id);$i++){

                $datasave = [
                    'student_id'=>$std_id[$i],
                    'attendance'=>$checkbox[$i],
                    'created_at' => now()
                ];
    
                DB::table('attendances')->insert($datasave);
            }

            return redirect()->to('/teacher/getAttendance');
        }

        public function getAttendance(Request $request) {
            $data=Attendance::join('students', 'students.id', '=', 'attendances.student_id')
                            ->select('students.fullname',
                                     'attendances.attendance',
                                     'attendances.created_at')
                            ->get();
            return view('dashboard.teacher.view-attendance')->with('attendance',$data);
        }  


        // public function search(Request $request)
        // {
        //     $search = $request->get('search');
        //     $notices = DB::table('notices')->where('name','like','%'.$search.'%')->paginate(5);
        //     return view('manage-notice', ['notices' => $notices]);
        // }

 
    }

    
            








        
        
      