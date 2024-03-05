<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ElevController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');

Route::get('/about',[HomeController::class, 'about'])->name('about');

Route::resource('users', UserController::class);

Route::get('/students',[ElevController::class, 'showStudents'])->name('students');



