<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultasController;

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AuthController;


Route::get('/area',[AreaController::class,'index']);

Route::get('/computer',[ComputerController::class,'index']);

Route::get('/training_center',[TrainingCenterController::class,'index']);

Route::get('/apprentice',[ApprenticeController::class,'index']);

Route::get('/teacher',[TeacherController::class,'index']);

Route::get('/course',[CourseController::class,'index']);
