<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home.home');
Route::view('/contact', 'about.contact');
Route::get('/courses',[\App\Http\Controllers\coursesController::class,'index']);

