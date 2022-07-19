<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/services/sponsor', 'Farminvestment@index');

Route::get('services/sponsor/{farm}', 'Farminvestment@show');

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

Route::get('/profile', 'UserController@profile')->name('profile');

Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');

Route::get('/user-farms', 'UserController@farmIndex')->name('dashboard');

Route::get('/wallet', 'UserController@wallet')->name('dashboard');

Route::get('/investment', 'UserController@investment')->name('dashboard');

Route::get('/farm-invest', 'FarmInvestment@farmInvest')->name('dashboard');

Route::get('/costbenefit/profit', 'FarmController@costBenefitProfit')->name('dashboard');

Route::post('/move-to-wallet', 'WalletController@moveToWallet')->name('dashboard');

Route::post('/terminate-to-wallet', 'WalletController@terminateToWallet')->name('dashboard');


Route::get('/adminDashboard', 'AdminDashboard@adminDashboard');

Route::get('/adminInvest', 'AdminDashboard@adminInvest');

Route::get('/adminInvestReturns', 'AdminDashboard@adminInvestReturns');

Route::get('/adminMarketplace', 'AdminDashboard@adminMarketplace');

Route::get('/adminMyFarm', 'AdminDashboard@adminMyFarm');

Route::get('/adminProfile', 'AdminDashboard@adminProfile');

Route::get('/adminWallet', 'AdminDashboard@adminWallet');

Route::get('/adminSettings', 'AdminDashboard@adminSettings');



Route::get('/marketplace', 'ProductController@marketplace')->name('dashboard');
Route::post('/add-sell-product', 'ProductController@store')->name('sell-product');


Route::post('/forget-password', 'ResetPasswordController@submitForgetPasswordForm')->name('forget.password.post');

Route::post('/reset-password', 'ResetPasswordController@submitResetPasswordForm')->name('reset.password.post');

Route::post('/signin', "AuthController@signin")->name('signin');

Route::get('/signup', "AuthController@signupForm")->name('signUpForm');

Route::get('/signin',  "AuthController@signinForm")->name('signInForm');

Route::get('/single-checkout/{farm}', 'OrderController@singleCheckout')->name('single-checkout');
Route::get('/paystack/callback', 'OrderController@verifyTransaction')->name('verify');

Route::get('/logout', 'AuthController@logout')->name('logout');

Route::post('/signup', "AuthController@signup")->name('signup');


Route::get('/home', [App\Http\Controllers\AuthController::class, 'signin']);

//Google Login
Route::get('signin/google', [App\Http\Controllers\AuthController::class, 'redirectToGoogle'])->name('signin.google');
Route::get('signin/google/callback', [App\Http\Controllers\AuthController::class, 'handleGoogleCallback']);

//facebook Login
Route::get('signin/facebook', [App\Http\Controllers\AuthController::class, 'redirectToFacebook'])->name('signin.facebook');
Route::get('signin/facebook/callback', [App\Http\Controllers\AuthController::class, 'handleFacebokCallback']);




