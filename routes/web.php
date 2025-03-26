<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// GET
Route::get('/', function () {
    return view('pages.home');
});
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

// POST
Route::post('sign-up', [UserController::class, 'signUp']);
Route::post('log-out',[UserController::class, 'logout']);