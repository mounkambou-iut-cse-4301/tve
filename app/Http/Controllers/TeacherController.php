<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DateTime;
use DB;
use App\teach;
use App\student;
use App\teacher;
use App\course;
use App\admn;
use App\User;
use App\attendance;
use App\coursetake;

class TeacherController extends Controller
{
   
    function teacherlogin( Request $re){
    	 return view('pages/teacher/teacherlogin');
    }

    function login_teacher( Request $re){
    	$teacher_id=$re->input('teacher_id');
    	$teacher_pass=$re->input('teacher_pass');

    	$tea_log=teacher::where('teacher_id',$teacher_id)
    	                ->where('teacher_pass',$teacher_pass)->first();

    	if($tea_log !=null){
    		$user=User::find($tea_log->user_fk_teacher);
          	 
          	Auth::login($user);
          	// dd(Auth::user()->id);
          	
            $tea_sel_course=DB::table('teachs')->where('teacher_fk_teach',$teacher_id)->get();
             
          	return view('pages/teacher/teacherdashboard')->with('te_sel_course',$tea_sel_course);
    	}else{
    		return redirect('/teacherlogin')->with('message','Id or Password is wrong');
    	}
    }


    
    function teacherdashboard (Request $req){
    	$select_course=$req->input('select_course');
    	// dd($select_course);
    	$req->session()->put('course',$select_course);
    	

    	$t_log=teacher::where('user_fk_teacher',Auth::user()->id)->first();
    	$course_log=DB::table('teachs')->where('teacher_fk_teach',$t_log->teacher_id)
    	                               ->where('course_fk_teach',$select_course)->first();
    	  $pass=$course_log->course_fk_teach;                             
    	 // $this->teacherattendance($pass);
    	return view('pages/teacher/teacher_welcome')->with('course_log',$course_log)
    	                                            ->with('t_log',$t_log);

    }


    
     function teacherattendance (Request $req){
     	
    	
        $st=coursetake::where('course_fk_take',$req->session()->get('course'))->get();
        
    	return view('pages/teacher/teacherattendance')->with('stu',$st);
    }

    function teacher_attendance (Request $req){
           $st_id=$req->input('st_id');
           $attendance=$req->input('attendance');
           $now = new DateTime();
            
             

           $count=count($st_id);
           for($i=0; $i<$count; $i++){
           	   $insert_att=attendance::create([
                   'course_fk_att'=>$req->session()->get('course'),
                   'student_fk_att'=>(int) $req->input('st_id')[$i],
                   'att_date'=>$now->format('Y-m-d'),
                   'att_presence'=>$req->input('attendance')[$i],
              
               ]);
           }
           return redirect('/teacherattendance')->with('message','Done');

    }


    function teacherattendancedetails(Request $req){

    	$att_details=attendance::where('course_fk_att',$req->session()->get('course'))->paginate(7);
    	


           return view('pages/teacher/teacherattendancedetails')->with('att_details',$att_details);

    }
}
