<?php

use App\Http\Api\ProductController;
use App\Http\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// GET
Route::get('/products', [ProductController::class, 'getAllProduct']);
Route::get('/products/category/{category_id}', [ProductController::class, 'getProductByCategory']);

// POST
Route::post('/forgot-password', [UserController::class, 'sendOTPcode']);
Route::post('/forgot-password/otp', [UserController::class, 'verifyOTP']);

// PUT
Route::put('/forgot-password', [UserController::class, 'resetPassword']);

// DELETE