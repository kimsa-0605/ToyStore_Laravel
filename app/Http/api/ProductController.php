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
        $perPage = $request->input('per_page', 12);

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
}
