<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogPostController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Static Page
Route::get('/', function () {
    return view('index');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/services/sponsor', 'Farminvestment@index');



Route::get('services/sponsor/{farm}', 'Farminvestment@show');


Route::get('/blog', 'BlogPostController@getPost');

Route::get('/blog/{slug}/', 'BlogPostController@show');

Route::get('/cart', 'CartitemController@getCart');


Route::post('/forget-password', 'ResetPasswordController@submitForgetPasswordForm')->name('forget.password.post');

Route::post('/reset-password', 'ResetPasswordController@submitResetPasswordForm')->name('reset.password.post');

Route::post('/signin', "AuthController@signin")->name('signin');

Route::get('/signup', "AuthController@signupForm")->name('signUpForm');

Route::get('/signin',  "AuthController@signinForm")->name('signInForm');


Route::get('/logout', 'AuthController@logout')->name('logout');

Route::post('/signup', "AuthController@signup")->name('signup');
