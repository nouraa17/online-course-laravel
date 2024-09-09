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
// <<<<<<< reham
// =======
// <<<<<<< neama
// blogs route

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
// >>>>>>> master

Route::group(['prefix'=>'blogs'],function(){
    Route::get('/',function(){
        return view('partial-components.blogs.index');} );
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
// >>>>>>> master
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
