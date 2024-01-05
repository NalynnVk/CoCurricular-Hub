<?php

use App\Http\Controllers\EnrollmentController;
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
})->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/profile', function () {
//     return view('profile');
// });

// Instructor CRUD // http://127.0.0.1:8000/module
Route::get('/module', 'App\Http\Controllers\ModuleController@index');
Route::get('/module/create', 'App\Http\Controllers\ModuleController@createForm');
Route::post('/module/create', 'App\Http\Controllers\ModuleController@submitForm');
Route::get('/module/{id}/edit', 'App\Http\Controllers\ModuleController@edit');
Route::put('/module/{id}/update', 'App\Http\Controllers\ModuleController@update');
Route::get('/module/{id}/delete', 'App\Http\Controllers\ModuleController@delete');

// Student // http://127.0.0.1:8000/student-modules
Route::get('/student-modules', [ModuleController::class, 'studentModules'])->name('student-modules');
Route::get('/module/{id}', [ModuleController::class, 'showModuleDetails'])->name('module-details');

// Additional routes for EnrollmentController
Route::post('/enroll/{id}', [EnrollmentController::class, 'enrollModule'])->name('enroll');
Route::delete('/unenroll/{id}', [EnrollmentController::class, 'unenroll'])->name('unenroll');
Route::get('/enrolled-modules', [EnrollmentController::class, 'studentEnrolledModules']);

// Profile
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
Route::get('/edit-profile', [ProfileController::class, 'editProfile'])->name('edit-profile');
