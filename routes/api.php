<?php

use App\Http\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// GET
Route::get('/products', [ProductController::class, 'getAllProduct']);
Route::get('/products/category/{category_id}', [ProductController::class, 'getProductByCategory']);

// POST

// PUT

// DELETE