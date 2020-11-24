<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/' , 'StudentController@dashboard');

Auth::routes();

Route::get('/account/{userId}/{userVerificationToken}/activate', 'Auth\AccountController@verifyToken');
Route::get('/account/waiting-verification', 'Auth\AccountController@waitingVerification');
Route::post('/account/resend-verification', 'Auth\AccountController@resendVerification');

Route::get('/account/forgot-password', 'Auth\AccountController@forgotPassword')->name('forgot.password');
Route::post('/account/forgot-password', 'Auth\AccountController@sendEmailForgotPassword')->name('forgot.password');
Route::get('/account/{resetVerificationToken}/forgot-password', 'Auth\AccountController@verifyForgotToken');
Route::post('/account/reset-password', 'Auth\AccountController@updatePassword')->name('password-reset');

//Route untuk register teacher dan staff

Route::get('/register-student', 'Auth\RegisterController@registerStudent');
Route::get('/register-teacher', 'Auth\RegisterController@registerTeacher');
Route::get('/register-staff', 'Auth\RegisterController@registerStaff');

//Route Untuk Student jika register dan login maka akan ke halaman ini
Route::group(['middleware' => ['role:admin']], function () {
	Route::get('/admin' , 'AdminController@dashboard');

	//ADmin
	Route::get('/admin/dashboard' , 'AdminController@dashboard');
    Route::get('/admin/list-students' , 'AdminController@listStudents');
    Route::get('/admin/list-class' , 'AdminController@listClass');

    Route::get('/admin/add-class' , 'AdminController@addClass');
    Route::get('/admin/add-student' , 'AdminController@addStudent');

    Route::get('/admin/list-tabungan'  , 'AdminController@listTabungan');
    Route::get('/admin/list-tabungan/detail' , 'AdminController@detailTabungan');
    Route::get('/admin/list-tabungan/detail/siswa' , 'AdminController@detailTabunganSiswa');

    //Untuk Save
    //ini untuk bagian input data kelas dan siswa
    Route::post('/admin/add-class' , 'AdminController@SaveAddClass');
    Route::post('/admin/add-student' , 'AdminController@SaveAddStudent');
    
    Route::get('/admin/list-students' , 'AdminController@list-students');    
    
    
});

//student
Route::group(['middleware' => ['role:student']], function () {
	Route::get('/student' , 'StudentController@dashboard');
    Route::get('/student/list-tabungan' , 'StudentController@listTabungan');
   
});




Route::get('table'  , 'AdminController@table');
Route::get('form' , 'AdminController@form');
