<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

Route::get('/', function () {
    return view('index');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/partners', function () {
    return view('partners');
});
Route::get('/faq', function () {
    return view('faq');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services/sponsor', 'FarmInvestment@index');

Route::get('services/sponsor/{farm}', 'FarmInvestment@show');

Route::get('/blog', 'BlogPostController@getPost');

Route::get('/blog/{slug}/', 'BlogPostController@show');

Route::get('/cart', 'CartItemController@getCart');

Route::put('/cart/{cartitem}', 'CartItemController@update');

Route::delete('/cart/clear', 'CartItemController@clear');

Route::delete('/cart/{cartitem}', 'CartItemController@destroy');

Route::post('/addcart/{type}', 'CartItemController@addCart');

Route::get('/cartnum', 'CartItemController@cartNum');

Route::get('/check-in-cart/{id}', 'CartItemController@checkInCart');

Route::get('/checkout', 'OrderController@checkout')->name('checkout');

Route::get('/single-checkout/{farm}', 'OrderController@singleCheckout')->name('single-checkout');


Route::get('/paystack/callback', 'OrderController@verifyTransaction')->name('verify');


Route::get('/profile', 'UserController@profile')->name('profile');

Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');

Route::get('/user-farms', 'UserController@farmIndex')->name('dashboard');

Route::get('/wallet', 'UserController@wallet')->name('dashboard');

Route::get('/investment', 'UserController@investment')->name('dashboard');

Route::get('/farm-invest', 'FarmInvestment@farmInvest')->name('dashboard');


Route::get('/marketplace', 'ProductController@marketplace')->name('dashboard');

Route::post('/forget-password', 'ResetPasswordController@submitForgetPasswordForm')->name('forget.password.post');

Route::post('/reset-password', 'ResetPasswordController@submitResetPasswordForm')->name('reset.password.post');

Route::post('/signin', "AuthController@signin")->name('signin');

Route::get('/signup', "AuthController@signupForm")->name('signUpForm');

Route::get('/signin',  "AuthController@signinForm")->name('signInForm');


Route::get('/logout', 'AuthController@logout')->name('logout');

Route::post('/signup', "AuthController@signup")->name('signup');
