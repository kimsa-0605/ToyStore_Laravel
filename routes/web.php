<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// GET
Route::get('/', [ProductController::class, 'getIndex']);
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
