<?php

use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', function () {
    return view('profile');
});

// // Module - Instructor - create.blade.php
// Route::get('/module/instructor/create', function () {
//     return view('module.instructor.create'); // Update the view path
// });

// Route::get('/module/instructor/list', [ModuleController::class, 'index'])->name('modules.index');
// Route::get('/module/instructor/{module}/edit', [ModuleController::class, 'edit'])->name('modules.edit');
// Route::delete('/module/instructor/{module}/delete', 'App\Http\Controllers\ModuleController@delete');

// // Module - Instructor - submit action form blade & submit controller
// Route::post('/module/instructor/submit', 'App\Http\Controllers\ModuleController@submit');

// web.php
// Instructor
Route::get('/module', 'App\Http\Controllers\ModuleController@index');
Route::get('/module/create', 'App\Http\Controllers\ModuleController@createForm');
Route::post('/module/create', 'App\Http\Controllers\ModuleController@submitForm');
Route::get('/module/{id}/edit', 'App\Http\Controllers\ModuleController@edit');
Route::put('/module/{id}/update', 'App\Http\Controllers\ModuleController@update');
Route::get('/module/{id}/delete', 'App\Http\Controllers\ModuleController@delete');

// Student
Route::get('/student-modules', [ModuleController::class, 'studentModules'])->name('student-modules');
Route::get('/module/{id}', [ModuleController::class, 'showModuleDetails'])->name('module-details');
Route::post('/module/{id}/enroll', [ModuleController::class, 'enrollModule'])->name('enroll-module');
Route::get('/student-enrolled-modules', [ModuleController::class, 'studentEnrolledModules'])->name('student-enrolled-modules');
Route::delete('/unenroll/{id}', 'ModuleController@unenrollModule')->name('unenroll');
// Route::get('/module/create', 'App\Http\Controllers\ModuleController@createForm');
// Route::post('/module/create', 'App\Http\Controllers\ModuleController@submitForm');
// Route::get('/module/{id}/edit', 'App\Http\Controllers\ModuleController@edit');
// Route::put('/module/{id}/update', 'App\Http\Controllers\ModuleController@update');
// Route::get('/module/{id}/delete', 'App\Http\Controllers\ModuleController@delete');



// Profile
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
Route::get('/edit-profile', [ProfileController::class, 'editProfile'])->name('edit-profile');
