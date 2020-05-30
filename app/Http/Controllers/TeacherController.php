<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use symphony\component\HttpFoundation\File\UploadedFile;
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
use App\percentage_attendance;
use App\material;

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
      $check=percentage_attendance::where('block_attendance',1)->get();
      if(count($check)>0){
        $status=1;
        return view('pages/teacher/teacherattendance')->with('status',$status);
      }
      else{
         $st=coursetake::where('course_fk_take',$req->session()->get('course'))->get();
         $status=0;
         return view('pages/teacher/teacherattendance')->with('stu',$st)
                                                       ->with('status',$status);
      } 	
       
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
            

    	 return view('pages/teacher/teacherattendance_select')->with('st_sort',$st_sort)
    	                                                      ->with('st',$st); 
    	}
    	if($req->isMethod('post')){
    		$sort_st_id=(int)$req->input('sort_st_id');
    		$sort_st_date=$req->input('sort_st_date');
    		

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
            
            $percentage=number_format($percentage,2);

           return view('pages/teacher/teacherattendancedetails')->with('att_details',$att_details)->with('percentage',$percentage);
    	}
    }

    

    function teachermark(Request $req){
      $check=coursetake::where('block_mark',1)->get();
      if(count($check)>0){
        $status=1;
          return view('pages/teacher/teachermark_empty')->with('status',$status);
      }
      else{
        $status=0;

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
    		
             return view('pages/teacher/teachermark_empty')->with('status',$status);
    	    }

      }else{
      	return view('pages/teacher/teachermark_empty')->with('status',$status);
      }


    }
    	
  }
    
    function teachersetting(Request $req){
      $te=teacher::where('user_fk_teacher',Auth::user()->id)->first();
      $teach=DB::table('teachs')->where('teacher_fk_teach',$te->teacher_id)->get();
     
      return view('pages/teacher/teachersetting')->with('te',$te)
                                                 ->with('teach',$teach);
    }

    function teacher_changepassword (Request $req){
       $te=teacher::where('user_fk_teacher',Auth::user()->id)->first();
          $st_pass=$req->input('st_pass');
          $st_pass1=$req->input('st_pass1');
          $st_pass2=$req->input('st_pass2');
       if($req->isMethod('get')){
           return view('pages/teacher/teacher_changepassword');
      
         }
       if($req->isMethod('post')){
          if( $st_pass==$te->teacher_pass && $st_pass1==$st_pass2 ){
                $update=teacher::where('teacher_id',$te->teacher_id)
                            ->update([
                                 'teacher_pass'=>$st_pass1,
                            ]);
               
                return redirect('teachersetting');
             }else{

              
               return redirect('teacher_changepassword')->with('message','The current password is wrong or the new password does not match with the confirm password');
             }
       }
    }

    function teacher_statistic(Request $req){
      $Aplus=count(grade::where('course_fk_grade',$req->session()->get('course'))->where('grade_store','A+')->get());
      $Aminus=count(grade::where('course_fk_grade',$req->session()->get('course'))->where('grade_store','A-')->get());
      $A=count(grade::where('course_fk_grade',$req->session()->get('course'))->where('grade_store','A')->get());

     $Bplus=count(grade::where('course_fk_grade',$req->session()->get('course'))->where('grade_store','B+')->get());
     $Bminus=count(grade::where('course_fk_grade',$req->session()->get('course'))->where('grade_store','B-')->get());
     $B=count(grade::where('course_fk_grade',$req->session()->get('course'))->where('grade_store','B')->get());

     $Cplus=count(grade::where('course_fk_grade',$req->session()->get('course'))->where('grade_store','C+')->get());
     $C=count(grade::where('course_fk_grade',$req->session()->get('course'))->where('grade_store','C')->get());
     $D=count(grade::where('course_fk_grade',$req->session()->get('course'))->where('grade_store','D')->get());
        
     
      return view('pages/teacher/teacher_statistic')->with('Aplus',$Aplus)
                                                    ->with('A',$A)
                                                    ->with('Aminus',$Aminus)
                                                    ->with('Bplus',$Bplus)
                                                    ->with('B',$B)
                                                    ->with('Bminus',$Bminus)
                                                    ->with('Cplus',$Cplus)
                                                    ->with('C',$C)
                                                    ->with('D',$D);
    }

   
    function teachermaterial(Request $req){
      if($req->isMethod('get')){
         return view('pages/teacher/teachermaterial');
      }

      if($req->isMethod('post')){
       
        $lecture=$req->input('lecture');
         $comment=$req->input('comment');
          $filename=$req->file->getClientOriginalName();
          
       
         $req->file->storePubliclyAs('upload',$filename,'public');
         

         $insert=material::create([
               'course_fk_material'=> $req->session()->get('course'),
               'lecture'=>$lecture,
               'comment'=>$comment,
               'filename'=>$filename,

         ]);

       return redirect('\teachermaterial')->with('message','File Uploaded successfully');
      }
    }
}
