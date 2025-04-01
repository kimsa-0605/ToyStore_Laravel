<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// GET
Route::get('/', [ProductController::class, 'getProduct']);
Route::get('/catalog', function () {
    return view('pages.catalog');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/delivery', function () {
    return view('pages.delivery');
});
Route::get('/contacts', function () {
    return view('pages.contacts');
});
Route::get('sign-up', [UserController::class, 'getSignUpForm']);
Route::get('login', [UserController::class, 'getLoginForm']);

// POST
Route::post('sign-up', [UserController::class, 'signUp']);
Route::post('login',[UserController::class,'login']);
Route::post('logout',[UserController::class, 'logout'])->name('logout');

Route::get('/forgot-password', [UserController::class, 'showFogotPassword'])->name('forgot.password.form');
Route::post('/forgot-password', [UserController::class, 'sendOTP'])->name('forgot.password');

Route::get('/verify-otp', [UserController::class, 'showVerifyOTPForm'])->name('verify.otp.form');
Route::post('/verify-otp', [UserController::class, 'verifyOTP'])->name('verify.otp');

Route::get('/reset-password', [UserController::class, 'showResetPasswordForm'])->name('reset.password.form');
Route::post('/reset-password', [UserController::class, 'resetPassword'])->name('reset.password');
