<?php

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

// POST