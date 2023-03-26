<?php

use App\Http\Controllers\user\LocalizationController;
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
//Lang
Route::get('/lang/{locale}',[LocalizationController::class, 'setLang'])->name('changeLang');
//Dashboard
Route::get('/',[\App\Http\Controllers\user\DashboardController::class,'index'])->name('dashboard');
//Go To Cart
Route::get('/cart',[\App\Http\Controllers\user\DashboardController::class,'indexCart'])->name('gotocart');
//Browsing
Route::get('/browsing',[\App\Http\Controllers\user\DashboardController::class,'indexBrowsing'])->name('browsing');
//Terms Page
Route::get('/terms',[\App\Http\Controllers\user\DashboardController::class,'termsPage'])->name('terms');
//Sitemap Page
Route::get('/sitemap',[\App\Http\Controllers\user\DashboardController::class,'siteMapPage'])->name('sitemap');
//Error Page
Route::get('/error',[\App\Http\Controllers\user\DashboardController::class,'errorPage'])->name('error');
//Trainings Page
Route::get('/trainings/{category?}',[\App\Http\Controllers\user\TrainingsController::class,'index'])->name('trainings');
Route::get('/traningInner/{item_id}',[\App\Http\Controllers\user\TrainingsController::class,'indexTraningInner'])->name('traningInner');
//Resource Page
Route::get('/resource/{category?}',[\App\Http\Controllers\user\ResourceController::class,'index'])->name('resource');
Route::get('/resourceInner/{item_id}',[\App\Http\Controllers\user\ResourceController::class,'indexResourceInner'])->name('resourceInner');
//News Page
Route::get('/news/{category?}',[\App\Http\Controllers\user\NewsController::class,'index'])->name('news');
Route::get('/newsInner/{item_id}',[\App\Http\Controllers\user\NewsController::class,'indexNewsInner'])->name('newsInner');
//Career Page
Route::get('/career',[\App\Http\Controllers\user\CareerController::class,'index'])->name('career');
Route::get('/careerInner/{item_id}',[\App\Http\Controllers\user\CareerController::class,'indexCareerInner'])->name('careerInner');
//Company Page
Route::get('/company',[\App\Http\Controllers\user\CompanyController::class,'index'])->name('company');
//Contact Page
Route::get('/contact',[\App\Http\Controllers\user\ContactController::class,'index'])->name('contact');


