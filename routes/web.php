<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;
Route::get('/',[\App\Http\Controllers\homeController::class,'index']);
Route::resource('/contact', contactController::class);
Route::view('/about', 'about.about');
Route::get('/courses',[\App\Http\Controllers\coursesController::class,'index']);
Route::get('/projects',[\App\Http\Controllers\projectController::class,'index']);


