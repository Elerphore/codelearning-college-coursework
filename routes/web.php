<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CourseController::class, 'index']);
Route::get('/theme/{index}', [ThemeController::class, 'index']);
Route::get('/theme/task/{index}', [TaskController::class, 'index']);
