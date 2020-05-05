<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use DB;
use App\teach;
use App\student;
use App\teacher;
use App\course;
use App\admn;
use App\User;
use App\coursetake;
class StudentController extends Controller
{
    function login(Request $req){
    	return view('pages/student/login');
    }

    function StudentLogin(Request $req){
    	$student_id=$req->input('student_id');
    	$student_pass=$req->input('student_pass');

    	$st_log=student::where('student_id',$student_id)
    	                ->where('student_pass',$student_pass)->first();

    	if($st_log != null){
            $user=User::find($st_log->user_fk_student);
          	 
          	Auth::login($user);
          	$sudent_sel=coursetake::where('student_fk_take',$student_id)->first();
            if($sudent_sel !=null){
                return view('pages/student/welcome_studentdashboard')->with('st_log',$st_log);
            }else{
            	$courses=  course::where('course_sem',$st_log->student_sem)->get();

    		     return view('pages/student/studentdashboard')
    		     ->with('st_login',$st_log)
    		     ->with('Courses',$courses);
            }
    		
    	}else{
    		return redirect('/login')->with('message','Id or Password is wrong');
    	}
    }


       function logout_s_t(Request $re){
       	Auth::logout();
       	return view('welcome');
       }
    


    function studentdashboard(Request $re){

        if($re->isMethod('post')){
        	$st_log=student::where('user_fk_student',Auth::user()->id)->first();
        	
        	$count=count($re->input('select_course'));
        	
        	for($i=0; $i<$count; $i++){
                $select_course= coursetake::create([
                  'student_fk_take'=>$st_log->student_id,
                  'course_fk_take'=>$re->input('select_course')[$i],
                  'take_sem'=>$st_log->student_sem,
                ]);
            }
        	return view('pages/student/welcome_studentdashboard')->with('st_log',$st_log);
        }
    }



}
