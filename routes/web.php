<?php

use Illuminate\Support\Facades\Route;

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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('course_detail','Versatile@courseDetail');

Route::post('store','Versatile@studentSign');

Route::post('stdLogin','Versatile@studentLogin');

//After Login Routing
Route::get('studentDeshboard', function () {
    return view('students.studentDeshboard');
});

Route::get('course_detail2','Versatile@courseDetail2');

Route::post('cart','Versatile@studentCart');

Route::get('mycourse','Versatile@myCourse');
