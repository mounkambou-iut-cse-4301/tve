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
    return view('pages/firstyeardetail');
});


Route::get('secondyeardetail', function () {
    return view('pages/secondyeardetail');
});


Route::get('thirdyeardetail', function () {
    return view('pages/thirdyeardetail');
});


Route::get('fourthyeardetail', function () {
    return view('pages/fourthyeardetail');
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

Route::get('teachermaterial', function () {
    return view('pages/teacher/teachermaterial');
});

Route::get('teacherattendance', function () {
    return view('pages/teacher/teacherattendance');
});

Route::get('teachermark', function () {
    return view('pages/teacher/teachermark');
});

Route::get('teachersetting', function () {
    return view('pages/teacher/teachersetting');
});