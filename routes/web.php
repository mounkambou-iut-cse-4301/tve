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
// Admin part end








// student part begin

Route::get('/logout_s_t','StudentController@logout_s_t');

Route::get('/login','StudentController@login');

Route::post('/StudentLogin','StudentController@StudentLogin');

Route::match(['get','post'],'/studentatendance_select','StudentController@studentatendance_select');

Route::match(['get','post'],'/studentdashboard','StudentController@studentdashboard');

Route::get('/studentmark','StudentController@studentmark');

Route::get('/studentresult','StudentController@studentresult');

Route::get('lecturematerials', function () {
return view('pages/student/lecturematerials');
});


Route::get('studentsetting', function () {
return view('pages/student/studentsetting');
});

// student part end






// teacher part begin


Route::get('/teacherlogin','TeacherController@teacherlogin');
Route::post('/login_teacher','TeacherController@login_teacher');
Route::match(['get','post'],'teacherdashboard','TeacherController@teacherdashboard');

Route::post('/teacher_attendance','TeacherController@teacher_attendance');
Route::get('/teacherattendance','TeacherController@teacherattendance');

Route::match(['get','post'],'teacherattendance_select','TeacherController@teacherattendance_select');
Route::match(['get','post'],'teachermark','TeacherController@teachermark');


Route::get('teachermaterial', function () {
return view('pages/teacher/teachermaterial');
});



Route::get('teachersetting', function () {
return view('pages/teacher/teachersetting');
});


// teacher part end