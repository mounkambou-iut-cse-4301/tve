<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;
use App\student;
use App\teacher;
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
        $see_student=student::all();
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
        $see_teacher=teacher::all();
        return view('pages/admin/teacherinfo')
        ->with('s_teacher',$see_teacher);
       }
}