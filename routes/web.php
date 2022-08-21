<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\ResetPasswordController;



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

Route::get('/contact', function () {
    return view('contact');
});


Route::post('/send-phase', 'ContactController@sendPhrase')->name('contact');

Route::get('/services/sponsor', 'Farminvestment@index');

Route::get('services/sponsor/{farm}', 'Farminvestment@show');

Route::get('/blog', 'BlogPostController@getPost');

Route::get('/blog/{slug}/', 'BlogPostController@show')->name('showblog');

Route::get('/cart', 'CartItemController@getCart');

Route::put('/cart/{cartitem}', 'CartItemController@update');

Route::delete('/cart/clear', 'CartItemController@clear');

Route::delete('/cart/{cartitem}', 'CartItemController@destroy');

Route::post('/addcart/{type}', 'CartItemController@addCart');

Route::get('/cartnum', 'CartItemController@cartNum');

Route::get('/check-in-cart/{id}', 'CartItemController@checkInCart');

Route::get('/checkout', 'OrderController@checkout')->name('checkout');

Route::get('/profile', 'UserController@profile')->name('profile');

Route::post('/update-profile', 'UserController@updateProfile')->name('updateprofile');

Route::get('/user-settings', 'UserController@settings')->name('settings');

Route::post('/change-password', 'UserController@ChangePassword')->name('pass');

Route::get('/marketplace', 'ProductController@marketplace')->name('dashboard');

Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');

Route::get('/user-farms', 'UserController@farmIndex')->name('dashboard');

Route::get('/wallet', 'UserController@wallet')->name('dashboard');

Route::get('/investment', 'UserController@investment')->name('dashboard');

Route::get('/farm-invest', 'FarmInvestment@farmInvest')->name('dashboard');

Route::get('/costbenefit/profit', 'FarmController@costBenefitProfit')->name('dashboard');

Route::post('/move-to-wallet', 'WalletController@moveToWallet')->name('dashboard');

Route::post('/terminate-to-wallet', 'WalletController@terminateToWallet')->name('dashboard');

Route::post('/withdrawal-request', 'WalletController@withdrawRequest')->name('dashboard');

Route::post('/update-profile-pic', 'UserController@changeProfilePic')->name('change-profile');

Route::get('/verify-email', 'AuthController@verifyEmail');
//admin route
Route::group(['middleware' => 'auth.admin', 'prefix' => 'admin', 'before' => 'admin'], function () {

    Route::get('/adminDashboard', 'AdminDashboard@adminDashboard')->name('admindashboard');

    Route::get('/adminInvest', 'AdminDashboard@adminInvest');

    Route::get('/adminInvestReturns', 'AdminDashboard@adminInvestReturns');

    Route::get('/adminMarketplace', 'AdminDashboard@adminMarketplace');

    Route::get('/adminMyFarm', 'AdminDashboard@adminMyFarm');

    Route::get('/adminProfile', 'AdminDashboard@adminProfile');

    Route::get('/adminWallet', 'AdminDashboard@adminWallet');

    Route::get('/adminBlog', 'AdminDashboard@adminBlog');
    
    Route::get('/adminWithraw', 'AdminDashboard@adminWithdraw');

    Route::get('/verify-email', 'AuthController@verifyEmail');

    Route::get('/adminBlog', 'AdminDashboard@adminBlog');

 
    Route::get('/adminSettings', 'AdminDashboard@adminSettings');

    Route::post('/send-message', 'MessageController@sendmessage');

    Route::get('/marketplace', 'ProductController@marketplace')->name('dashboard');

    Route::post('/add-sell-product', 'ProductController@store')->name('sell-product');

    Route::get('/delete-product/{product}', 'ProductController@destroy')->name('deleteproduct');

    Route::post('/add-farm', 'FarmController@create')->name('sell-farm');

    Route::get('/delete-farm/{farm}', 'FarmController@destroy')->name('deletefarm');

    Route::post('/post-category', 'CategoryController@create')->name('postcategory');

    Route::post('/post-label', 'CategoryController@createlabel')->name('postlabel');

    Route::post('/post-blog', 'BlogPostController@store')->name('postblog');

    Route::get('/delete-blog/{post}', 'BlogPostController@destroy')->name('deleteblog');

    Route::post('/update-blog/{post}', 'BlogPostController@update')->name('updateblog');

    Route::post('/withdrawal-request', 'WalletController@withdrawRequest')->name('adminwithdraw');

    Route::post('/update-profile-pic', 'UserController@changeProfilePic')->name('change-profile');

    Route::post('/update-profile', 'UserController@updateProfile')->name('updateprofile');
});
 Route::get('/user/messages', 'UserController@getMessage')->name('getmessage');

Route::get('/forgetten-password', 'ResetPasswordController@forgetPassword')->name('fog');

Route::post('/forget-password', 'ResetPasswordController@ForgetPasswordStore')->name('forget');

Route::get('/reset-password', 'ResetPasswordController@ResetPasswordForm')->name('fog');

Route::post('/reset-password', 'ResetPasswordController@ResetPasswordFormStore')->name('reset-password');

Route::post('/signin', "AuthController@signin")->name('signin');

Route::get('/signup', "AuthController@signupForm")->name('signUpForm');

Route::get('/signin',  "AuthController@signinForm")->name('signInForm');

Route::get('/delete/{id}',  "AuthController@deleteuser")->name('deleteuser');

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
