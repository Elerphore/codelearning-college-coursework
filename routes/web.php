<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('index'); })->name('main');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/course', [CourseController::class, 'index'])->name('course');
Route::get('/theme/{index}', [ThemeController::class, 'index'])->middleware(['auth']);

Route::post('/theme/task/store', [TaskController::class, 'store'])->middleware(['auth'])->name('task.store');
Route::get('/theme/task/{index}', [TaskController::class, 'index'])->middleware(['auth']);


require __DIR__.'/auth.php';
