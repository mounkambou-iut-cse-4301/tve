<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades;
use App\teach;
use DB;

use App\student;
use App\teacher;
use App\course;

class AdminController extends Controller
{
	function insertNewStudent(Request $req)
     {
	$student_id=$req->input('student_id');
	$student_name=$req->input('student_name');
	$student_email=$req->input('student_email');
	$student_pass=$req->input('student_pass');
	$student_sem=$req->input('student_sem');
	$data=array('student_id'=>$student_id ,'student_name'=>$student_name ,'student_email'=>$student_email ,'student_pass'=>$student_pass ,'student_sem'=>$student_sem);
	DB::table('students')->insert($data);
	return redirect('\addstudent');
      }


    function studentinfo(Request $req)
      {
        $see_student=DB::table('students')->paginate(10);
        return view('pages/admin/studentinfo')
        ->with('s_student',$see_student);
       }


       

       function insertNewTeacher(Request $req)
       {
       	$teacher_id=$req->input('teacher_id');
       	$teacher_name=$req->input('teacher_name');
       	$teacher_email=$req->input('teacher_email');
       	$teacher_pass=$req->input('teacher_pass');
       	$teacher_office=$req->input('teacher_office');

    $data=array('teacher_id'=>$teacher_id ,'teacher_name'=>$teacher_name ,'teacher_email'=>$teacher_email ,'teacher_pass'=>$teacher_pass ,'teacher_office'=>$teacher_office);
	DB::table('teachers')->insert($data);

       	return redirect('\addteacher');
       }


       function teacherinfo(Request $req)
      {
        $see_teacher=DB::table('teachers')->paginate(10);
        return view('pages/admin/teacherinfo')
        ->with('s_teacher',$see_teacher);
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

          return redirect('\assigncourses');

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
	// dd($teach_course);
      	return view('pages/admin/teachcourses')->with('tch_course',$teach_course);
      }
}