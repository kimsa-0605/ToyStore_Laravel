<?php

namespace App\Http\api;
use App\Models\Product;

class ProductController
{
    public function getAllData() {
        $products = Product::with('category')->get();
        return response()->json($products, 200);
    }
    public function getByCategory($category_id) {
        $products = Product::where('category_id', $category_id)->with('category')->get();
        if($products->isEmpty()) {
            return response()->json(['message'=>'There is no product in this category'],404);
        }
        return response()->json($products, 200);
    }
}
