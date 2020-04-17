<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;
use App\course;
class Controller extends BaseController
{
use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

function firstyeardetail(Request $req)
{
	$courses_first=course::where('course_sem','1')->get();
    $courses_second=course::where('course_sem','2')->get();
    return view('pages/firstyeardetail')
    ->with('course_fi',$courses_first)
    ->with('course_se',$courses_second);
}

function secondyeardetail(Request $req)
{
	$courses_thirth=course::where('course_sem','3')->get();
    $courses_fourth=course::where('course_sem','4')->get();
    return view('pages/secondyeardetail')
    ->with('course_th',$courses_thirth)
    ->with('course_fo',$courses_fourth);
}

function thirdyeardetail(Request $req)
{
    $courses_fifth=course::where('course_sem','5')->get();
    $courses_sixth=course::where('course_sem','6')->get();
    return view('pages/thirdyeardetail')
    ->with('course_fi',$courses_fifth)
    ->with('course_si',$courses_sixth);
}

function fourthyeardetail(Request $req)
{
	$courses_seventh=course::where('course_sem','7')->get();
    $courses_eighth=course::where('course_sem','8')->get();
    return view('pages/fourthyeardetail')
    ->with('course_sev',$courses_seventh)
    ->with('course_ei',$courses_eighth);
}


}