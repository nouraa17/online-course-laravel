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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/instructor', function () {
    return view('instructor');
});
Route::get('/course-landing', function () {
    return view('course-landing');
});
Route::get('/course', function () {
    return view('course');
});
Route::get('/category', function () {
    return view('category-courses');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/admin-users', function () {
    return view('admin.users-list');
});
Route::get('/admin-courses', function () {
    return view('admin.courses-list');
});
