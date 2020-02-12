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