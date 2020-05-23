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
use App\attendance;
use App\grade;
use App\result;
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
          	$sudent_sel=coursetake::where('student_fk_take',$student_id)->where('take_sem',$st_log->student_sem)->first();
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
            $credit=course::where('course_id',$re->input('select_course')[$i])->first();
                $select_course= coursetake::create([
                  'student_fk_take'=>$st_log->student_id,
                  'course_fk_take'=>$re->input('select_course')[$i],
                  'take_sem'=>$st_log->student_sem,
                ]);

                $grade_table=grade::create([
                  'course_fk_grade'=>$re->input('select_course')[$i],
                  'student_fk_grade'=>$st_log->student_id,
                  'grade_sem'=>$st_log->student_sem,
                  'credit'  =>$credit->course_credit,

                ]);
            }
        	return view('pages/student/welcome_studentdashboard')->with('st_log',$st_log);
        }
    }
    

    function studentatendance(Request $re){
        $st_log=student::where('user_fk_student',Auth::user()->id)->first();
    	$student_att=attendance::where('student_fk_att',$st_log->student_id)->orderBy('att_date', 'DESC')->paginate(6);
    	
    	return view('pages/student/studentatendance')->with('student_att',$student_att);
    }


    function studentatendance_select(Request $req){
         $student=student::where('user_fk_student',Auth::user()->id)->first();
        if($req->isMethod('get')){
           
           $course_sort=attendance::where('student_fk_att', $student->student_id)
                                  ->groupBy('course_fk_att')->get();

            $date_sort=attendance::where('student_fk_att', $student->student_id)
                                  ->groupBy('att_date')->get();
                                  

            return view('pages/student/studentatendance_select')->with('course_sort',$course_sort)->with('date_sort',$date_sort);
        }
        if($req->isMethod('post')){
           $sort_st_course=$req->input('sort_st_course');
           $sort_course_date=$req->input('sort_course_date');

           $att_details=attendance::where('course_fk_att',$sort_st_course)
                                   ->where('student_fk_att',$student->student_id)
                                   ->where('att_date', $sort_course_date)->get();

          $att_count=attendance::where('course_fk_att',$sort_st_course)
                                   ->where('student_fk_att',$student->student_id)->get();

            $att_pre=attendance::where('course_fk_att',$sort_st_course)
                                 ->where('student_fk_att',$student->student_id)
                                 ->where('att_presence',1)->get();

            $att_coun=count($att_count);
            $att_pr=count($att_pre);

            $percentage=($att_pr*100)/$att_coun;

          return view('pages/student/studentatendance')->with('att_details',$att_details)
                                                       ->with('percentage',$percentage);

        }
        
    }


    
    function studentmark(Request $req){

      $st=student::where('user_fk_student',Auth::user()->id)->first();

      $student_mark=coursetake::where('student_fk_take',$st->student_id)
                               ->where('take_sem',$st->student_sem)->paginate(6);
      // dd($student_mark);
      return view('pages/student/studentmark')->with('student_mark',$student_mark);
    }

    
    function studentresult(Request $req){
      $st=student::where('user_fk_student',Auth::user()->id)->first();
      
      $take=coursetake::where('student_fk_take',$st->student_id)
                               ->where('take_sem',$st->student_sem)->get();
                            
              
              $data=array();
            
              foreach($take as $tk){
                 $highest= highest($tk);
                 $mfa = $tk->mid + $tk->final + $tk->att_mark;
                 $sum = $highest + $mfa;

                 $grade = course::where('course_id',$tk->course_fk_take)->first();
                 $data = array_merge($data, array($tk->course_fk_take=>getGrade($sum,$grade->course_credit)));
                 
                 
              }

             $gpa=grade::where('student_fk_grade',$st->student_id)
                        ->where('grade_sem',$st->student_sem)->get();

             $grade_credit=0;
             $total_credit=grade::where('student_fk_grade',$st->student_id)
                        ->where('grade_sem',$st->student_sem)->sum('credit');

              

             foreach ($gpa as $gp) {
               $grade_credit=$grade_credit+calgpa($gp->grade_store,$gp->credit);
             }
            
            $gpa=($grade_credit/$total_credit);
            
            $gpa=number_format($gpa,2);
            
            $check=result::where('student_fk_result',$st->student_id)
                         ->where('sem_result',$st->student_sem)->first();

            if($check==null){
               $check_again=result::where('student_fk_result',$st->student_id)->get();
              $cpga=0;
               if(count($check_again)>0){
                
                 foreach ($check_again as $check_ag) {
                    $cpga=$cgpa+$check_ag->gpa_result;
                 }
                
               }
               $cgpa=($cpga+ $gpa)/(count($check_again)+1);

                 $insert=result::create([
                    'student_fk_result'=> $st->student_id,
                    'gpa_result'  =>$gpa,
                    'cgpa_result' =>$cgpa,
                    'sem_result'=>$st->student_sem,
                 ]);

                 $update=result::where('student_fk_result',$st->student_id)
                              ->update([
                                'cgpa_result' =>$cgpa,
                              ]);
             
            }

     $student_gpa=result::where('student_fk_result',$st->student_id)
                        ->where('sem_result',$st->student_sem)->first();
              

                  return view('pages/student/studentresult')->with('data',$data)
                                                            ->with('student_gpa',$student_gpa);
    }


}
