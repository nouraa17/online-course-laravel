<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

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

Route::group(['prefix'=>'blogs'],function(){
    Route::get('/',function(){
        return view('blogs');} );
    Route::get('/blog1', function () {
        return view('partial-components.blogs.blog1');
    });
    Route::get('/blog2', function () {
        return view('partial-components.blogs.blog2');
    });
    Route::get('/blog3', function () {
        return view('partial-components.blogs.blog3');
    });
    Route::get('/blog4', function () {
        return view('partial-components.blogs.blog4');
    });
    Route::get('/blog5', function () {
        return view('partial-components.blogs.blog5');
    });
    Route::get('/blog6', function () {
        return view('partial-components.blogs.blog6');
    });
    Route::get('/blog7', function () {
        return view('partial-components.blogs.blog7');
    });
    Route::get('/blog8', function () {
        return view('partial-components.blogs.blog8');
    });
    Route::get('/blog9', function () {
        return view('partial-components.blogs.blog9');
    });
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/my-learning', function () {
    return view('my-learning');
});
Route::get('/student-profile', function () {
    return view('student-profile');
});

Route::get('/subscription', function () {
    return view('subscription');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/courses', function () {
    return view('courses');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/team', function () {
    return view('team');
});

// dashboard

Route::group(['prefix'=>'dashboard/' ,'as'=>'dashboard.'],function(){

    // blogs route
Route::group(['prefix'=>'blogs','as'=>'blogs.'],function(){
    Route::get('/index',function(){
        return view('partial-components.admin.blogs.index');} )->name('index');
    Route::get('/create',function(){
        return view('partial-components.admin.blogs.create');} )->name('create');
    Route::get('/edit',function(){
        return view('partial-components.admin.blogs.edit');} )->name('edit');
});

// users route
Route::group(['prefix'=>'users','as'=>'users.'],function(){
    Route::get('/index',function(){
        return view('partial-components.admin.users.index');} )->name('index');

});
// categories route
Route::group(['prefix'=>'categories','as'=>'categories.'],function(){
    Route::get('/index',function(){
        return view('partial-components.admin.categories.index');} )->name('index');
        Route::get('/create',function(){
            return view('partial-components.admin.categories.create');} )->name('create');

            Route::post('/store',[CategoryController::class ,'store'])->name('store');
        });
// courses route
Route::group(['prefix'=>'courses','as'=>'courses'],function(){
    Route::get('/index',function(){
        return view('partial-components.admin.courses.index');} )->name('index');
        Route::get('/create',function(){
            return view('partial-components.admin.courses.create');} )->name('create');

});

});