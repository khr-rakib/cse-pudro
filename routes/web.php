<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/admission', function(){return view('admission'); });
Route::get('/general_info', function(){return view('general_info');});
Route::get('/general_info/prospective', function(){return view('prospective_student');});
Route::get('/general_info/current_std', function(){return view('current_student');});
Route::get('/general_info/ug_studies', function(){return view('ug_studies');});
Route::get('/general_info/pg_studies', function(){return view('pg_studies');});
Route::get('/researches', function(){return view('researches');});
Route::get('/researches/publication', function(){return view('publication');});
Route::get('/activities', function(){return view('activities');});
Route::get('/activities/indgov', function(){return view('indgov');});
Route::get('/activities/feature', function(){return view('feature');});
Route::get('/activities/self_assessment', function(){return view('self_assessment');});
Route::get('/downloads/class_routine', function(){return view('class_routine');});
Route::get('/downloads/class_routine', function(){return view('class_routine');});
Route::get('/downloads/student_notice', function(){return view('student_notice');});
Route::get('/downloads', function(){return view('downloads');});
Route::get('/contact', function(){return view('contact');});



// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admission-form', 'SiteController@admissionFrom')->name('admission-form');
Route::post('/admission-form', 'RegisterStudentController@admissionFormSubmit')->name('admission-form');

Route::get('application', 'user\UserController@applicationForCertificateForm')->middleware(['auth', 'user'])->name('application');

Route::post('applicationForm', 'user\UserController@applicationForCertificate')->middleware(['auth', 'user'])->name('applicationForm');

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'admin', 'middleware' => ['auth','admin']], function() {
    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('admission-list', 'AdminController@admissionList')->name('admission.list');
    Route::get('admission-veiw/{id}', 'AdminController@adminssionView')->name('admission.view');
    Route::get('admission-confirm/{id}', 'AdminController@admissionConfirm')->name('admission.confirm');
    Route::get('application-certificate', 'AdminController@applicationCertificate')->name('application.certificate');
    Route::get('subjects', 'AdminController@subjects')->name('subjects');
    Route::get('application/delete/{id}', 'AdminController@applicationDelete')->name('application.delete');
});


Route::group(['as' => 'user.', 'prefix' => 'user', 'namespace' => 'user', 'middleware' => ['auth','user']], function() {
    Route::get('dashboard', 'UserController@dashboard')->name('dashboard');
    Route::post('subject', 'UserController@subject')->name('subject');
});
