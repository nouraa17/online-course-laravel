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
Route::get('/blogs', function () {
    return view('partial-components.blogs');
});
Route::get('/blogDetails', function () {
    return view('partial-components.blog-details');
});
Route::get('/contact', function () {
    return view('partial-components.contact');
});
Route::get('/myLearning', function () {
    return view('partial-components.my-learning');
});
Route::get('/studentProfile', function () {
    return view('partial-components.student-profile');
});

Route::get('/subscribtion', function () {
    return view('partial-components.subscribtion');
});

