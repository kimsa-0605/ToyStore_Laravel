<?php

namespace App\Http\Api;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
    public function searchProduct(Request $request): JsonResponse
    {
        $keyword = $request->input('keyword');
        $perPage = $request->input('per_page', 9);
        $query = Product::with('categories');
        if ($keyword) {
            $query->where('product_name', 'like', '%' . $keyword . '%');
        }
        $products = $query->orderBy('created_at', 'desc')->paginate($perPage);
        return response()->json([
            'success' => true,
            'message' => $products->isEmpty() 
                ? 'No products found' 
                : 'Products retrieved successfully',
            'data' => $products
        ]);
    }
    public function filterProduct(Request $request): JsonResponse
    {
        $category_id = $request->input('category_id');
        $min_price = $request->input('min_price');
        $max_price = $request->input('max_price');
        $perPage = $request->input('per_page', 9);
        $query = Product::with('categories');
        if ($category_id) {
            $query->where('category_id', $category_id);
        }
        if ($min_price && $max_price) {
            $query->whereBetween('price', [$min_price, $max_price]);
        }
        $products = $query->paginate($perPage);
        if ($products->isEmpty()) {
            return response()->json(['message' => 'No products found matching the filters'], 404);
        }
        return response()->json([
            'success' => true,
            'message' => 'Products retrieved successfully',
            'data' => $products
        ]);
    }
}
