<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\course;
Route::get('/', function () {

return view('welcome');
});


Route::get('admin', function () {
return view('pages/admin/adminlogin');
});


Route::get('admindashboard', function () {
return view('pages/admin/admindashboard');
});


Route::get('login', function () {
return view('pages/student/login');
});


Route::get('firstyeardetail', function () {
$courses_first=course::where('course_sem','1')->get();
$courses_second=course::where('course_sem','2')->get();
return view('pages/firstyeardetail')
->with('course_fi',$courses_first)
->with('course_se',$courses_second);
});


Route::get('secondyeardetail', function () {
$courses_thirth=course::where('course_sem','3')->get();
$courses_fourth=course::where('course_sem','4')->get();
return view('pages/secondyeardetail')
->with('course_th',$courses_thirth)
->with('course_fo',$courses_fourth);
});


Route::get('thirdyeardetail', function () {
$courses_fifth=course::where('course_sem','5')->get();
$courses_sixth=course::where('course_sem','6')->get();
return view('pages/thirdyeardetail')
->with('course_fi',$courses_fifth)
->with('course_si',$courses_sixth);
});


Route::get('fourthyeardetail', function () {
$courses_seventh=course::where('course_sem','7')->get();
$courses_eighth=course::where('course_sem','8')->get();
return view('pages/fourthyeardetail')
->with('course_sev',$courses_seventh)
->with('course_ei',$courses_eighth);
});


Route::get('lecturematerials', function () {
return view('pages/student/lecturematerials');
});


Route::get('studentmark', function () {
return view('pages/student/studentmark');
});


Route::get('addteacher', function () {
return view('pages/admin/addteacher');
});


Route::get('teacherinfo', function () {
return view('pages/admin/teacherinfo');
});


Route::get('addstudent', function () {
return view('pages/admin/addstudent');
});


Route::get('unassignecourses', function () {
return view('pages/admin/unassignecourses');
});


Route::get('studentinfo', function () {
return view('pages/admin/studentinfo');
});


Route::get('atfistsemester', function () {
return view('pages/admin/atfistsemester');
});


Route::get('atsecondsemester', function () {
return view('pages/admin/atsecondsemester');
});


Route::get('atthirdsemester', function () {
return view('pages/admin/atthirdsemester');
});


Route::get('atfourthsemester', function () {
return view('pages/admin/atfourthsemester');
});


Route::get('atfifthsemester', function () {
return view('pages/admin/atfifthsemester');
});


Route::get('atsixthsemester', function () {
return view('pages/admin/atsixthsemester');
});


Route::get('atseventhsemester', function () {
return view('pages/admin/atseventhsemester');
});


Route::get('ateightsemester', function () {
return view('pages/admin/ateightsemester');
});


Route::get('resultfistsemester', function () {
return view('pages/admin/resultfistsemester');
});


Route::get('resultsecondsemester', function () {
return view('pages/admin/resultsecondsemester');
});


Route::get('resultthirdsemester', function () {
return view('pages/admin/resultthirdsemester');
});


Route::get('resultfourthsemester', function () {
return view('pages/admin/resultfourthsemester');
});


Route::get('resultfifthsemester', function () {
return view('pages/admin/resultfifthsemester');
});


Route::get('resultsixthsemester', function () {
return view('pages/admin/resultsixthsemester');
});


Route::get('resultseventhsemester', function () {
return view('pages/admin/resultseventhsemester');
});


Route::get('resulteightsemester', function () {
return view('pages/admin/resulteightsemester');
});


Route::get('studentresult', function () {
return view('pages/student/studentresult');
});


Route::get('studentsetting', function () {
return view('pages/student/studentsetting');
});


Route::get('studentatendance', function () {
return view('pages/student/studentatendance');
});


Route::get('studentdashboard', function () {
return view('pages/student/studentdashboard');
});


Route::get('teachermaterial', function () {
return view('pages/teacher/teachermaterial');
});


Route::get('teacherattendance', function () {
return view('pages/teacher/teacherattendance');
});


Route::get('teacherattendancedetails', function () {
return view('pages/teacher/teacherattendancedetails');
});


Route::get('teachermark', function () {
return view('pages/teacher/teachermark');
});


Route::get('teachersetting', function () {
return view('pages/teacher/teachersetting');
});


Route::get('teacherdashboard', function () {
return view('pages/teacher/teacherdashboard');
});


Route::get('teacherlogin', function () {
return view('pages/teacher/teacherlogin');
});