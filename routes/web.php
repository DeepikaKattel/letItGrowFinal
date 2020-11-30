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

Auth::routes();
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/wave', [App\Http\Controllers\HomeController::class, 'wave'])->name('wave');
// Route::get('/about', [App\Http\Controllers\FrontEndController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\FrontEndController::class, 'contact'])->name('contact');
Route::post('/contactStore', [App\Http\Controllers\ContactUsController::class, 'store'])->name('contact.store');
Route::get('/vision', [App\Http\Controllers\FrontEndController::class, 'vision'])->name('vision');

Route::resource('career','App\Http\Controllers\CareerController');

Route::resource('adminCareer','App\Http\Controllers\Admin\CareerController');
Route::get('/adminCareer/destroy/{id}', 'App\Http\Controllers\Admin\CareerController@destroy')->name('c.destroy');

Route::get('/candidates', [App\Http\Controllers\Admin\CareerController::class, 'candidates'])->name('candidates');

Route::resource('/users', 'App\Http\Controllers\Admin\UserController');
Route::get('/users/destroy/{id}', 'App\Http\Controllers\UserController@destroy')->name('u.destroy');

Route::resource('adminAbout','App\Http\Controllers\Admin\AboutController');
Route::get('/adminAbout/destroy/{id}', 'App\Http\Controllers\Admin\AboutController@destroy')->name('a.destroy');

Route::resource('adminVision','App\Http\Controllers\Admin\VisionController');
Route::get('/adminVision/destroy/{id}', 'App\Http\Controllers\Admin\VisionController@destroy')->name('v.destroy');

Route::resource('adminServices','App\Http\Controllers\Admin\ServicesController');
Route::get('/adminServices/destroy/{id}', 'App\Http\Controllers\Admin\ServicesController@destroy')->name('s.destroy');
