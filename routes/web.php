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

Route::resource('model',App\Http\Controllers\ModelController::class);

// student Routes
Route::get(" student ", [\App\Http\Controllers\frontend\StudentController::class , 'index'] );
Route::get(" student/create ", [\App\Http\Controllers\frontend\StudentController::class , 'create'] );
Route::post(" student/store ", [\App\Http\Controllers\frontend\StudentController::class , 'store'] );
Route::get(" student/show/{id} ", [\App\Http\Controllers\frontend\StudentController::class , 'show'] );
Route::put(" student/update/{id} ", [\App\Http\Controllers\frontend\StudentController::class , 'update'] );
Route::delete(" student/destroy/{id} ", [\App\Http\Controllers\frontend\StudentController::class , 'destroy'] );
// teacher Routes
Route::get(" teacher ", [\App\Http\Controllers\admin\TeacherController::class , 'index'] );
Route::get(" teacher/create ", [\App\Http\Controllers\admin\TeacherController::class , 'create'] );
Route::post(" teacher/store ", [\App\Http\Controllers\admin\TeacherController::class , 'store'] );
Route::get(" teacher/show/{id} ", [\App\Http\Controllers\admin\TeacherController::class , 'show'] );
Route::put(" teacher/update/{id} ", [\App\Http\Controllers\admin\TeacherController::class , 'update'] );
Route::delete(" teacher/destroy/{id} ", [\App\Http\Controllers\admin\TeacherController::class , 'destroy'] );
