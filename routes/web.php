<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/sign-up', [UserController::class, 'getSignUpForm']);

// POST