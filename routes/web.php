<?php

use App\Http\Controllers\AmbientController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HourAmbientController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
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
    return view('Templete.Templete');
});
//
Route::resource('profesores', TeacherController::class);
//
Route::resource('materias', SubjectController::class);
//
Route::resource('grupos', GroupController::class);
//
Route::resource('ambientes', AmbientController::class);
//
Route::resource('horas', HourAmbientController::class);
