<?php

namespace App\Http\Api;
use App\Models\Product;

class ProductController
{
    public function getAllProduct() {
        $products = Product::with('categories')->paginate(12);
        if($products->isEmpty()) {
            return response()->json(['message' => 'There is no product in this category'], 404);
        }
        return response()->json($products, 200);
    }
    public function getProductByCategory($category_id) {
        $products = Product::where('category_id', $category_id)->with('categories')->paginate(12);
        if($products->isEmpty()) {
            return response()->json(['message' => 'There is no product in this category'], 404);
        }
        return response()->json($products, 200);
    }
}
