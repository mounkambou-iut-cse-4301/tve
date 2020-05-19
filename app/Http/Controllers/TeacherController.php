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
use App\grade;

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
            
             $co=course::where('course_id',$req->session()->get('course'))->first();

           $count=count($st_id);
           for($i=0; $i<$count; $i++){
           	   $insert_att=attendance::create([
                   'course_fk_att'=>$req->session()->get('course'),
                   'student_fk_att'=>(int) $req->input('st_id')[$i],
                   'att_date'=>$now->format('Y-m-d'),
                   'att_presence'=>$req->input('attendance')[$i],
                   'sem'=>$co->course_sem,
              
               ]);
           }
           return redirect('/teacherattendance')->with('message','Done');

    }


    function teacherattendance_select(Request $req){
    	if($req->isMethod('get')){
    		$st_sort=attendance::where('course_fk_att',$req->session()->get('course'))->groupBy('att_date')->get();
    		$st=coursetake::where('course_fk_take',$req->session()->get('course'))->get();
            // dump($st);
            // dd($st);

    	 return view('pages/teacher/teacherattendance_select')->with('st_sort',$st_sort)
    	                                                      ->with('st',$st); 
    	}
    	if($req->isMethod('post')){
    		$sort_st_id=(int)$req->input('sort_st_id');
    		$sort_st_date=$req->input('sort_st_date');
    		// dd($sort_st_id);

    		$att_details=attendance::where('course_fk_att',$req->session()->get('course'))
    		                       ->where('student_fk_att',$sort_st_id)
    		                       ->where('att_date',$sort_st_date)->paginate(5);

    	   $att_count=attendance::where('course_fk_att',$req->session()->get('course'))
    		                       ->where('student_fk_att',$sort_st_id)->get();

    		$att_pre=attendance::where('course_fk_att',$req->session()->get('course'))
    		                     ->where('student_fk_att',$sort_st_id)
    		                     ->where('att_presence',1)->get();
    		
            $att_coun=count($att_count);
            $att_pr=count($att_pre);

            $percentage=($att_pr*100)/$att_coun;
            


           return view('pages/teacher/teacherattendancedetails')->with('att_details',$att_details)->with('percentage',$percentage);
    	}
    }

    

    function teachermark(Request $req){
    	$st=coursetake::where('course_fk_take',$req->session()->get('course'))
    		               ->whereNull('quiz1')
    		               ->whereNull('quiz2')
    		               ->whereNull('quiz3')
    		               ->whereNull('quiz4')
    		               ->whereNull('mid')
    		               ->whereNull('final')
    		               ->whereNull('att_mark')->get();

        if(count($st)>0){



    	    if($req->isMethod('get')){

    		
    		      $st_att=attendance::where('course_fk_att',$req->session()->get('course'))->get();
    		       // dd($st->student_fk_take);
    		      return view('pages/teacher/teachermark')->with('st',$st);
    	    }
    	    if($req->isMethod('post')){
    		      $st_id=$req->input('st_id');
    		      $quiz1=$req->input('quiz1');
    		      $quiz2=$req->input('quiz2');
    		      $quiz3=$req->input('quiz3');
    		      $quiz4=$req->input('quiz4');
    		      $mid=$req->input('mid');
    		      $final=$req->input('final');
    		      $attendance=$req->input('attendance');

                
    		       $count=count($st_id);
             
                   for($i=0;$i<$count;$i++){
                   

                       if((double)$quiz1[$i]<=(double)$quiz2[$i] && (double)$quiz1[$i]<=(double)$quiz3[$i] && (double)$quiz1[$i]<=(double)$quiz4[$i]){
                           $high=(double)$quiz2[$i]+(double)$quiz3[$i]+(double)$quiz4[$i];
                        }
                        elseif((double)$quiz2[$i]<=(double)$quiz1[$i] && (double)$quiz2[$i]<=(double)$quiz3[$i] && (double)$quiz2[$i]<=(double)$quiz4[$i]){
                           $high=(double)$quiz1[$i]+(double)$quiz3[$i]+(double)$quiz4[$i];
                        }
                         elseif((double)$quiz3[$i]<=(double)$quiz1[$i] && (double)$quiz3[$i]<=(double)$quiz2[$i] && (double)$quiz3[$i]<=(double)$quiz4[$i]){
                           $high=(double)$quiz1[$i]+(double)$quiz2[$i]+(double)$quiz4[$i];
                        }
                         elseif((double)$quiz4[$i]<=(double)$quiz1[$i] && (double)$quiz4[$i]<=(double)$quiz2[$i] && (double)$quiz4[$i]<=(double)$quiz3[$i]){
                           $high=(double)$quiz1[$i]+(double)$quiz2[$i]+(double)$quiz3[$i];
                        }

                        $sum=$high+(double)$mid[$i]+(double)$final[$i]+(double)$attendance[$i];
                        // dd($sum);

                    	$insert_mark=coursetake::where('course_fk_take',$req->session()->get('course'))
             	                       ->where('student_fk_take',(int)$st_id[$i])
             	                       ->update([
             	                       	     'quiz1'=>(double)$quiz1[$i],
             	                             'quiz2'=>(double)$quiz2[$i],
             	                             'quiz3'=>(double)$quiz3[$i],
             	                             'quiz4'=>(double)$quiz4[$i],
             	                             'mid'=>(double)$mid[$i],
             	                             'final'=>(double)$final[$i],
             	                             'att_mark'=>(double)$attendance[$i],
             	                   ]);
                         $course=course::where('course_id',$req->session()->get('course'))->first();
                        $insert_grade=grade::where('course_fk_grade',$req->session()->get('course'))->where('student_fk_grade',(int)$st_id[$i])
                              ->update([
                                  'grade_store'=>getGrade($sum,$course->course_credit),

                              ]);
      

                    }
    		
             return view('pages/teacher/teachermark_empty');
    	    }

      }else{
      	return view('pages/teacher/teachermark_empty');
      }
    	
    }
}
