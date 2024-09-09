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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('courses', function () {
    return view('courses');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('team', function () {
    return view('team');
});
