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
use App\student;
use App\teach;
use PDF\Article as BA;
Route::get('/', function () {
return view('welcome');
});
Route::get('/firstyeardetail','controller@firstyeardetail');
Route::get('/secondyeardetail','controller@secondyeardetail');
Route::get('/thirdyeardetail','controller@thirdyeardetail');
Route::get('/fourthyeardetail','controller@fourthyeardetail');



// Admin part begin
Route::get('admin', function () {
return view('pages/admin/adminlogin');
});
Route::get('/logoutAdmin','AdminController@logoutAdmin');
Route::post('/LoginAdmin','AdminController@LoginAdmin');

// Route:: group (['middleware'=>['Auth']],function(){

// });

Route::get('admindashboard','AdminController@admindashboard');
Route::get('addteacher','AdminController@addteacher');
Route::post('/insertNewTeacher','AdminController@insertNewTeacher');
Route::get('/teacherinfo','AdminController@teacherinfo');
Route::match(['get','post'],'/assigncourses','AdminController@select_courses');
Route::get('/addstudent','AdminController@addstudent');
Route::get('/studentinfo','AdminController@studentinfo');
Route::post('/insertNewStudent','AdminController@insertNewStudent');
Route::get('/unassignecourses','AdminController@unassignecourses');
Route::get('/teachcourses','AdminController@teachcourse');
Route::get('/deletecourse_assign/{id?}','AdminController@deletecourse_assign');
Route::match(['get','post'],'/attendances','AdminController@attendances');


Route::get('/manage_access','AdminController@manage_access');
Route::get('/lock_result','AdminController@lock_result');
Route::get('/lock_open_result','AdminController@lock_open_result');
Route::get('/lock_attendance','AdminController@lock_attendance');
Route::get('/lock_open_attendance','AdminController@lock_open_attendance');
Route::get('/lock_mark','AdminController@lock_mark');
Route::get('/lock_open_mark','AdminController@lock_open_mark');
Route::match(['get','post'],'/edit_student_info/{id?}','AdminController@edit_student_info');
Route::post('/edit_student_info_update','AdminController@edit_student_info_update');

Route::get('/resultfistsemester','AdminController@resultfistsemester');
Route::get('/resultsecondsemester','AdminController@resultsecondsemester');

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
// Admin part end








// student part begin

Route::get('/logout_s_t','StudentController@logout_s_t');

Route::get('/login','StudentController@login');

Route::post('/StudentLogin','StudentController@StudentLogin');

Route::match(['get','post'],'/studentatendance_select','StudentController@studentatendance_select');

Route::match(['get','post'],'/studentdashboard','StudentController@studentdashboard');

Route::get('/studentmark','StudentController@studentmark');

Route::match(['get','post'],'/studentresult','StudentController@studentresult');
Route::get('/studentsetting','StudentController@studentsetting');
Route::match(['get','post'],'/student_changepassword','StudentController@student_changepassword');
Route::match(['get','post'],'/lecturematerials','StudentController@lecturematerials');

Route::match(['get','post'],'student_forum_post','StudentController@student_forum_post');

Route::get('/student_forum','StudentController@student_forum');

Route::match(['get','post'],'/student_post/{id?}','StudentController@student_post');










// student part end






// teacher part begin


Route::get('/teacherlogin','TeacherController@teacherlogin');
Route::post('/login_teacher','TeacherController@login_teacher');
Route::match(['get','post'],'teacherdashboard','TeacherController@teacherdashboard');

Route::post('/teacher_attendance','TeacherController@teacher_attendance');
Route::get('/teacherattendance','TeacherController@teacherattendance');

Route::match(['get','post'],'teacherattendance_select','TeacherController@teacherattendance_select');
Route::match(['get','post'],'teachermark','TeacherController@teachermark');

Route::get('/teachersetting','TeacherController@teachersetting');

Route::match(['get','post'],'teacher_changepassword','TeacherController@teacher_changepassword');
Route::get('/teacher_statistic','TeacherController@teacher_statistic');

Route::match(['get','post'],'teachermaterial','TeacherController@teachermaterial');

Route::match(['get','post'],'teacher_forum_post','TeacherController@teacher_forum_post');

Route::get('/teacher_forum','TeacherController@teacher_forum');


Route::match(['get','post'],'/teacher_post/{id?}','TeacherController@teacher_post');








// teacher part end