<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/forget-password', 'ResetPasswordController@submitForgetPasswordForm')->name('forget.password.post');

Route::post('/reset-password', 'ResetPasswordController@submitResetPasswordForm')->name('reset.password.post');

Route::post('/sigin', 'AuthController@signin')->name('signin');

Route::get('/logout', 'AuthController@logout')->name('logout');

Route::post('/savelogin', 'AuthController@signup')->name('savelogin');
