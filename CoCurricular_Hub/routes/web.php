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

// Instructor CRUD // http://127.0.0.1:8000/module-instructor
Route::middleware(['auth', 'role:instructor'])->group(function () {
    Route::get('/module-instructor', 'App\Http\Controllers\ModuleController@index');
    Route::get('/module-instructor/create', 'App\Http\Controllers\ModuleController@createForm');
    Route::post('/module-instructor/create', 'App\Http\Controllers\ModuleController@submitForm');
    Route::get('/module-instructor/{id}/edit', 'App\Http\Controllers\ModuleController@edit');
    Route::put('/module-instructor/{id}/update', 'App\Http\Controllers\ModuleController@update');
    Route::get('/module-instructor/{id}/delete', 'App\Http\Controllers\ModuleController@delete');
});

// Student // http://127.0.0.1:8000/student-module
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/student-module', 'App\Http\Controllers\ModuleController@studentModules');
    Route::get('/student-module-detail/{id}', 'App\Http\Controllers\ModuleController@showModuleDetails')->name('student-module-detail');
    Route::get('/enroll-module', [EnrollmentController::class, 'studentEnrolledModules'])->name('enroll-module');
    Route::post('/enroll/{id}', [EnrollmentController::class, 'enrollModule'])->name('enroll');
    Route::delete('/unenroll/{id}', [EnrollmentController::class, 'unenroll'])->name('unenroll');
});

// Profile
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
// Route::post('/update-profile', 'UserProfileController@update')->name('update.profile');
