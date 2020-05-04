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
      


}