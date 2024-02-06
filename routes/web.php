<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', function () {
    $np = "Pașa Nicolina";
    return view('contacts', ['np' => $np]);
});

Route::get('/about', function () {
    $groups = ['W-2042', 'W-2041', 'P-2042', 'P-2041'];
    return view('about', ['groups' => $groups]);
});
