<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Teacher;
use App\Models\VerifyTeacher;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TeacherController extends Controller
{


    function create(Request $request){
        //Validate Inputs
        $request->validate([
            'fullname'=>'required',
            'address'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password',
            'education'=>'required',
            'skills'=>'required'
        ]);

        $teacher = new Teacher();
        $teacher->fullname = $request->fullname;
        $teacher->address = $request->address;
        $teacher->email = $request->email;
        $teacher->education = $request->education;
        $teacher->skills = $request->skills;
        $teacher->password = \Hash::make($request->password);
        $save = $teacher->save();
        $last_id = $teacher->id;

        $token = $last_id.hash('sha256', \Str::random(120));
        $verifyURL = route('teacher.verify',['token'=>$token,'service'=>'Email_verification']);

        VerifyTeacher::create([
            'teacher_id'=>$last_id,
            'token'=>$token,
        ]);

        $message = 'Dear <b>'.$request->name.'</b>';
        $message.= 'Thanks for signing up, we just need you to verify your email address to complete setting up your account.';

        $mail_data = [
            'recipient'=>$request->email,
            'fromEmail'=>$request->email,
            'fromName'=>$request->name,
            'subject'=>'Email Verification',
            'body'=>$message,
            'actionLink'=>$verifyURL,
        ];

        \Mail::send('email-template', $mail_data, function($message) use ($mail_data){
                   $message->to($mail_data['recipient'])
                           ->from($mail_data['fromEmail'], $mail_data['fromName'])
                           ->subject($mail_data['subject']);
        });


        if( $save ){
            return redirect()->back()->with('success','You are now registered successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, failed to register');
        }
  }

        //
        public function verify(Request $request){
            $token = $request->token;
            $verifyTeacher = VerifyTeacher::where('token', $token)->first();
            if(!is_null($verifyTeacher)){
                $teacher = $verifyTeacher->teacher;
    
                if(!$teacher->email_verified){
                    $verifyTeacher->teacher->email_verified = 1;
                    $verifyTeacher->teacher->save();
    
                    return redirect()->route('teacher.login')->with('info','Your email is verified successfully. You can now login')->with('verifiedEmail', $teacher->email);
                }else{
                     return redirect()->route('teacher.login')->with('info','Your email is already verified. You can now login')->with('verifiedEmail', $teacher->email);
                }
            }
        }
    
    


    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:teachers,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in teachers table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('teacher')->attempt($creds) ){
            return redirect()->route('teacher.home');
        }else{
            return redirect()->route('teacher.login')->with('fail','Incorrect credentials');
        }
   }

   function logout(){
       Auth::guard('teacher')->logout();
       return redirect('/');
   }

//


   public function showForgotForm(){
    return view('dashboard.teacher.forgot');
    }


public function sendResetLink(Request $request){
    $request->validate([
        'email'=>'required|email|exists:users,email'
    ]);

    
    $token = \Str::random(64);
    \DB::table('password_resets')->insert([
          'email'=>$request->email,
          'token'=>$token,
          'created_at'=>Carbon::now(),
    ]);


    $action_link = route('teacher.reset.password.form',['token'=>$token,'email'=>$request->email]);
    $body = "We are received a request to reset the password for <b>Your app Name </b> account associated with ".$request->email.". You can reset your password by clicking the link below";

   \Mail::send('email-forgot',['action_link'=>$action_link,'body'=>$body], function($message) use ($request){
         $message->from('noreply@example.com','Your App Name');
         $message->to($request->email,'Teacher name')
                 ->subject('Reset Password');
   });

   return back()->with('success', 'We have e-mailed your password reset link!');
        }
        public function showResetForm(Request $request, $token = null){
            return view('dashboard.teacher.reset')->with(['token'=>$token,'email'=>$request->email]);
       
        }
       

        public function resetPassword(Request $request){
            $request->validate([
                'email'=>'required|email|exists:teachers,email',
                'password'=>'required|min:5|confirmed',
                'password_confirmation'=>'required',
            ]);
    
            $check_token = \DB::table('password_resets')->where([
                'email'=>$request->email,
                'token'=>$request->token,
            ])->first();
    
            if(!$check_token){
                return back()->withInput()->with('fail', 'Invalid token');
            }else{
    
                Teacher::where('email', $request->email)->update([
                    'password'=>\Hash::make($request->password)
                ]);

                \DB::table('password_resets')->where([
                    'email'=>$request->email
                ])->delete();
    
                return redirect()->route('teacher.login')->with('info', 'Your password has been changed! You can login with new password')->with('verifiedEmail', $request->email);
    
            }
        }
    }
