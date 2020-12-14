<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
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
use App\percentage_attendance;

class AdminController extends Controller
{
	
    function admindashboard(Request $req){
    	return view('pages/admin/admindashboard');
    }


   function addteacher(Request $req){
    	return view('pages/admin/addteacher');
    }


    function insertNewTeacher(Request $req)
       {

           $user = User::create([
           'name' => $req->input('teacher_name'),
           'user_type'=> 'teacher',
        ]);
        
        $newteacher= teacher::create([
        	'teacher_id'=> $req->input('teacher_id'),
        	'user_fk_teacher'=> $user->id,
        	'teacher_name' => $req->input('teacher_name'),
        	'teacher_email'=>$req->input('teacher_email'),
         	'teacher_pass'=>$req->input('teacher_pass'),
        	'teacher_office'=>$req->input('teacher_office'),

        ]);

       	return redirect('\addteacher')->with('message','New teacher inserted successfully');
       }

    function teacherinfo(Request $req)
      {
        $see_teacher=DB::table('teachers')->paginate(10);
        return view('pages/admin/teacherinfo')
        ->with('s_teacher',$see_teacher);
       }



   

     function addstudent(Request $req){
     	 return view('pages/admin/addstudent');
     }



	function insertNewStudent(Request $req)
     {
	
	  $user = User::create([
           'name' => $req->input('student_name'),
           'user_type'=> 'student',
        ]);
        
        $newteacher= student::create([
        	'student_id'=> $req->input('student_id'),
        	'user_fk_student'=> $user->id,
        	'student_name' => $req->input('student_name'),
        	'student_email'=>$req->input('student_email'),
        	'student_pass'=>$req->input('student_pass'),
        	'student_sem'=>$req->input('student_sem'),

        ]);
	return redirect('\addstudent')->with('message','New student inserted successfully');
      }


    function studentinfo(Request $req)
      {
        $see_student=DB::table('students')->paginate(10);
        return view('pages/admin/studentinfo')
        ->with('s_student',$see_student);

       
       }


       

       

  
       function select_courses(Request $re)
       {

       	    if($re->isMethod('get'))

             	{
                	$sel_courses=course::all();
                	$sel_t=teacher::all();
       	            return view('pages/admin/assigncourses')
                      	->with('sel_courses',$sel_courses)
                    	->with('sel_t',$sel_t);

            	}

            if($re->isMethod('post')){
         

                    $teacher_fk_teach=$re->input('teacher_fk_teach');
                	$course_fk_teach=$re->input('course_fk_teach');
                	$data=array('teacher_fk_teach'=>$teacher_fk_teach,'course_fk_teach'=>$course_fk_teach);
                	DB::table('teachs')->insert($data);

                    DB::table('courses')->where('course_id',$course_fk_teach)
                          ->update(['course_select'=>'1']);




                    return redirect('\assigncourses')->with('message','New course assigned successfully');

        	}
   
       	
       }


      function unassignecourses(Request $re)
      {
      	$unas_course=course::where('course_select','0')->orderByRaw('course_sem ASC')->paginate(10);
      	return view('pages/admin/unassignecourses')->with('un_course',$unas_course);
      }

      function teachcourse(Request $re)
      {
      	
      	$teach_course=DB::table('teachs')->paginate(10);

      	return view('pages/admin/teachcourses')->with('tch_course',$teach_course);
      }




      function LoginAdmin(Request $re)
      {
      	$admin_id=$re->input('admin_id');
      	$admin_pass=$re->input('admin_pass');

          $checkAdmin_login=admn::where('admin_id',$admin_id)
                                   ->where('admin_pass',$admin_pass)->first();

        
          if($checkAdmin_login != null)
          {
          	$user=User::find($checkAdmin_login->user_fk_admin);
          	// dd(Auth::user()->id);
          	Auth::login($user);

          	return view('pages/admin/admindashboard');
          }else  {
          	return redirect('/admin')->with('message','Name or Password is wrong');
          }
      }

       function logoutAdmin(Request $re){   
       	Auth::logout();
       	return view('welcome');
       }
      

       function resultfistsemester(Request $req){

        
       
        $st=student::where('student_sem',1)->get();
        
          foreach ($st as $stu) {
            $grade_credit=0;
            $gpa=0;
            $grade=grade::where('student_fk_grade',$stu->student_id)
                         ->where('grade_sem',1)->get();

            $total_credit=grade::where('student_fk_grade',$stu->student_id)
                         ->where('grade_sem',1)->sum('credit');


            
            count($grade);

            for($i=0;$i<count($grade);$i++){
              
               $grade_credit=$grade_credit+calgpa($grade[$i]->grade_store,$grade[$i]->credit);
            }
            
            $gpa=($grade_credit/$total_credit); 
            $gpa=number_format($gpa,2);
            
            $check=result::where('student_fk_result',$stu->student_id)
                          ->where('sem_result',1)->first();

            if($check==null){

              $inser_gpa=result::create([
                  'student_fk_result'=>$stu->student_id,
                  'gpa_result'=> $gpa,
                  'cgpa_result'=>$gpa,
                  'sem_result'=>1,
                  'block_result'=>0,

              ]);
            }
            
           
          }
          $array_gpa=result::where('sem_result',1)->paginate(6);

            return view('pages/admin/resultfistsemester')->with('array_gpa',$array_gpa);
       }

     

      function attendances(Request $req){
       
         if($req->isMethod('get')){
           $course_sort=coursetake::groupBy('course_fk_take')->get();
            return view('pages/admin/attendances_select')->with('course_sort',$course_sort);
         }
         if($req->isMethod('post')){
          $sort_st_course=$req->input('sort_st_course');
          $sort_st_range=$req->input('sort_st_range');

         
           $student=student::all();
           
          
           foreach ($student as $st) {
               $attendance=attendance::where('course_fk_att',$sort_st_course)
                                     ->where('student_fk_att',$st->student_id)->get();

               $presence=attendance::where('course_fk_att',$sort_st_course)
                                     ->where('student_fk_att',$st->student_id)
                                     ->where('att_presence',1)->get();

               $total_att=count($attendance);
               $total_presence=count($presence);
               if($total_att==0 || $total_presence==0){
                 $percentage=0;
               }else{
                  $percentage=($total_presence*100)/$total_att;
               }
               $percentage=number_format($percentage,2);

               $check_per=percentage_attendance::where('student_fk_percentage',$st->student_id)
                                               ->where('course_fk_percentage',$sort_st_course)
                                               ->where('semester',$st->student_sem)->first();

              if($check_per==null){
                $insert_percentage=percentage_attendance::create([
                   'student_fk_percentage'=>$st->student_id,
                   'course_fk_percentage'=>$sort_st_course,
                   'percentage'=>$percentage,
                   'semester'=>$st->student_sem,
                   'block_attendance'=>0,
               ]);
              }
               
           }

              $sort_st_range=(double)$sort_st_range;

           if($sort_st_range<50){
             $sel_percentage=percentage_attendance::where('course_fk_percentage',$sort_st_course)
                                                  ->where('student_block',0)
                                                  ->where('percentage','<',50)->paginate(7);
              if(count($sel_percentage)>0){
                $post=1;
              }else{
                $post=0;
              }
             $status='danger';
           }
           elseif ($sort_st_range>=50 && $sort_st_range<75) {
             $sel_percentage=percentage_attendance::where('course_fk_percentage',$sort_st_course)
                                                ->where('percentage','>=',50)
                                                ->where('student_block',0)
                                                ->where('percentage','<',75)->paginate(7);
               if(count($sel_percentage)>0){
                $post=1;
               }else{
                $post=0;
               }
             $status='warning';
           }
           elseif ($sort_st_range>=75) {
             $sel_percentage=percentage_attendance::where('course_fk_percentage',$sort_st_course)
                                                ->where('student_block',0)
                                                ->where('percentage','>=',75)->paginate(7);
                if(count($sel_percentage)>0){
                $post=1;
                }else{
                $post=0;
                }
             $status='success';
           }

           return view('pages/admin/attendances_result')->with('sel_percentage',$sel_percentage)
                                                        ->with('status',$status)
                                                        ->with('post',$post);
         }
        
      }


      function manage_access(Request $req){
        $result=result::where('block_result',1)->get();
        if(count($result)>0){
          $status_result=1;
        }
        elseif(count($result)<=0){
          $status_result=0;
        }

        $mark=coursetake::where('block_mark',1)->get();
        if(count($mark)>0){
          $status_mark=1;
        }
        elseif(count($mark)<=0){
          $status_mark=0;
        }

        $attendance=percentage_attendance::where('block_attendance',1)->get();
        if(count($attendance)>0){
          $status_att=1;
        }
        elseif(count($attendance)<=0){
          $status_att=0;
        }
        return view('pages/admin/manage_access')->with('status_result',$status_result)
                                       ->with('status_mark',$status_mark)
                                       ->with('status_att',$status_att);
      }

      function lock_result (Request $req){
         $result_lock=DB::table('results')->update([
             'block_result'=>0,

         ]);
         
         return redirect('/manage_access');
       
      }

      function lock_open_result (Request $req){
         $result_lock=DB::table('results')->update([
             'block_result'=>1,

         ]);

         return redirect('/manage_access');
       
      }

     function lock_attendance (Request $req){
         $result_lock=DB::table('percentage_attendances')->update([
             'block_attendance'=>0,

         ]);
         
         return redirect('/manage_access');
       
      }

    function lock_open_attendance (Request $req){
         $result_lock=DB::table('percentage_attendances')->update([
             'block_attendance'=>1,

         ]);
         
         return redirect('/manage_access');
       
      }

    function lock_mark (Request $req){
         $result_lock=DB::table('coursetakes')->update([
             'block_mark'=>0,

         ]);
         
         return redirect('/manage_access');
       
      }

   function lock_open_mark (Request $req){
         $result_lock=DB::table('coursetakes')->update([
             'block_mark'=>1,

         ]);
         
         return redirect('/manage_access');
       
      }

      function edit_student_info (Request $req, $id){
        if($req->isMethod('get')){
          $student_info=student::where('student_id',$id)->get();
          // dd($student_info->student_id);
           return view('pages/admin/edit_student_info')->with('student_info',$student_info);
        }
         
      
     }
     function edit_student_info_update (Request $req){
      $id=$req->input('id');
      $name=$req->input('name');
      $email=$req->input('email');
      $sem=$req->input('semester');
      $id=(int) $id;
      $sem=(int) $sem;
      // dd($sem);
      $student_info_update=DB::table('students')->where('student_id',$id)->update([
        'student_name'=>$name,
        'student_email'=>$email,
        'student_sem'=>$sem

    ]);

        return redirect('/studentinfo');
     }

}