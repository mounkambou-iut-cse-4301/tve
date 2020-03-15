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
    return view('pages/adminlogin');
});


Route::get('admindashboard', function () {
    return view('pages/admindashboard');
});


Route::get('login', function () {
    return view('pages/login');
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
    return view('pages/lecturematerials');
});


Route::get('studentmark', function () {
    return view('pages/studentmark');
});

Route::get('addteacher', function () {
    return view('pages/addteacher');
});

Route::get('teacherinfo', function () {
    return view('pages/teacherinfo');
});

Route::get('addstudent', function () {
    return view('pages/addstudent');
});

Route::get('studentinfo', function () {
    return view('pages/studentinfo');
});

Route::get('atfistsemester', function () {
    return view('pages/atfistsemester');
});

Route::get('atsecondsemester', function () {
    return view('pages/atsecondsemester');
});

Route::get('atthirdsemester', function () {
    return view('pages/atthirdsemester');
});

Route::get('atfourthsemester', function () {
    return view('pages/atfourthsemester');
});

Route::get('atfifthsemester', function () {
    return view('pages/atfifthsemester');
});

Route::get('atsixthsemester', function () {
    return view('pages/atsixthsemester');
});

Route::get('atseventhsemester', function () {
    return view('pages/atseventhsemester');
});

Route::get('ateightsemester', function () {
    return view('pages/ateightsemester');
});

Route::get('resultfistsemester', function () {
    return view('pages/resultfistsemester');
});

Route::get('resultsecondsemester', function () {
    return view('pages/resultsecondsemester');
});

Route::get('resultthirdsemester', function () {
    return view('pages/resultthirdsemester');
});

Route::get('resultfourthsemester', function () {
    return view('pages/resultfourthsemester');
});

Route::get('resultfifthsemester', function () {
    return view('pages/resultfifthsemester');
});

Route::get('resultsixthsemester', function () {
    return view('pages/resultsixthsemester');
});

Route::get('resultseventhsemester', function () {
    return view('pages/resultseventhsemester');
    
});

Route::get('resulteightsemester', function () {
    return view('pages/resulteightsemester');
});

Route::get('studentresult', function () {
    return view('pages/studentresult');
});

Route::get('studentatendance', function () {
    return view('pages/studentatendance');
});