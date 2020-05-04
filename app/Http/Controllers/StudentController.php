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

use App\course;
use App\student;
class StudentController extends Controller
{
    function login(Request $req){
    	return view('pages/student/login');
    }

    function StudentLogin(Request $req){
    	$student_id=$req->input('student_id');
    	$student_pass=$req->input('student_pass');

    	$st_log=DB::table('students')->where('student_id',$student_id)
    	                            ->where('student_pass',$student_pass)->first();
    	if($st_log != null){

    		//$user = User::where('email',$userProvided->getEmail())->first();
          
           // Auth::login($st_log);
    		$courses=  course::where('course_sem',$st_log->student_sem)->get();

    		return view('pages/student/studentdashboard')
    		->with('st_login',$st_log)
    		->with('Courses',$courses);
    	}else{
    		return redirect('/login')->with('message','Id or Password is wrong');
    	}
    }


    function studentdashboard(Request $re){

        if($re->isMethod('get')){
            // $sem=DB::table('students')->where('student_id',)->get();
            // dd($student_id);
            // dd($st_login->student_id);
        	
        	return view('pages/student/studentdashboard');
        }
    }




}
