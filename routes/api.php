<?php

use App\Http\api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// GET
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/products', [ProductController::class, 'getAllData']);
Route::get('/products/category/{category_id}', [ProductController::class, 'getByCategory']);

// POST

// PUT

// DELETE