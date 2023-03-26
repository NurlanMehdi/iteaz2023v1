<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

Route::group(['middleware'=>'auth'],function (){
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('admin-panel');
//Contact
    Route::get('/contact','App\Http\Controllers\Admin\ContactController@index')->name('contact');
    Route::post('/save-contact','App\Http\Controllers\Admin\ContactController@saveContactParametrs')->name('save.contact');
//Company
    Route::get('/company','App\Http\Controllers\Admin\CompanyController@index')->name('company');
    Route::get('/add-employee/{id}/{key}/{lang?}','App\Http\Controllers\Admin\CompanyController@addEmployee')->name('add-employee');
    Route::post('/save-employee','App\Http\Controllers\Admin\CompanyController@saveEmployee')->name('save-employee');
    Route::get('/delete-employee/{id}','App\Http\Controllers\Admin\CompanyController@trashEmployeeInfo')->name('trash-employee');
    Route::get('/delete-employee-translate/{id}','App\Http\Controllers\Admin\CompanyController@trashEmployeeOnlyTranslate')->name('trash-employee-translate');
//Career
    Route::get('/career','App\Http\Controllers\Admin\CareerController@index')->name('career');
    Route::get('/add-career/{id}/{key}/{lang?}','App\Http\Controllers\Admin\CareerController@addCareer')->name('add-career');
    Route::post('/save-career','App\Http\Controllers\Admin\CareerController@saveCareer')->name('save-career');
    Route::get('/delete-career/{id}','App\Http\Controllers\Admin\CareerController@trashCareerInfo')->name('trash-career');
    Route::get('/delete-career-translate/{id}','App\Http\Controllers\Admin\CareerController@trashCareerOnlyTranslate')->name('trash-career-translate');
//News
    Route::get('/news','App\Http\Controllers\Admin\NewsController@index')->name('news');
    Route::get('/add-news/{id}/{key}/{lang?}','App\Http\Controllers\Admin\NewsController@addNews')->name('add-news');
    Route::post('/save-news','App\Http\Controllers\Admin\NewsController@saveNews')->name('save-news');
    Route::get('/delete-news/{id}','App\Http\Controllers\Admin\NewsController@trashNewsInfo')->name('trash-news');
    Route::get('/delete-news-translate/{id}','App\Http\Controllers\Admin\NewsController@trashNewsOnlyTranslate')->name('trash-news-translate');
//Resource
    Route::get('/resource','App\Http\Controllers\Admin\ResourceController@index')->name('resource');
    Route::get('/add-resource/{id}/{key}/{lang?}','App\Http\Controllers\Admin\ResourceController@addResource')->name('add-resource');
    Route::post('/save-resource','App\Http\Controllers\Admin\ResourceController@saveResource')->name('save-resource');
    Route::get('/delete-resource/{id}','App\Http\Controllers\Admin\ResourceController@trashResourceInfo')->name('trash-resource');
    Route::get('/delete-resource-translate/{id}','App\Http\Controllers\Admin\ResourceController@trashResourceOnlyTranslate')->name('trash-resource-translate');
//Courses

    Route::get('/add-course/{id}/{key}/{lang?}','App\Http\Controllers\Admin\TraningsController@addCourse')->name('add-course');
    Route::post('/save-course','App\Http\Controllers\Admin\TraningsController@saveCourse')->name('save-course');
    Route::get('/delete-course/{id}/{key}','App\Http\Controllers\Admin\TraningsController@trashInfo')->name('trash-course');
    Route::get('/delete-course-translate/{id}/{key}','App\Http\Controllers\Admin\TraningsController@trashOnlyTranslate')->name('trash-course-translate');
//Tranings
    Route::get('/tranings','App\Http\Controllers\Admin\TraningsController@index')->name('tranings');
    Route::get('/add-tranings/{id}/{key}/{lang?}','App\Http\Controllers\Admin\TraningsController@addTranings')->name('add-tranings');
    Route::post('/save-tranings','App\Http\Controllers\Admin\TraningsController@saveTranings')->name('save-tranings');
//Logout Admin Panel
    Route::get('/logout','App\Http\Controllers\Admin\LoginController@handleLogout')->name('logout.handle');
});


Route::post('/login','App\Http\Controllers\Admin\LoginController@handleLogin')->name('login.handle')->middleware('guest');
Route::view('/signin', '/admin/auth/login')->name('login')->middleware('guest');
