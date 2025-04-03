<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
  public function getProduct () {
    $stuffedAnimals = Product::where('category_id', 1)->take(4)->get();
    $woodenToys = Product::where('category_id', 2)->take(4)->get();
    return view('pages.home', compact('stuffedAnimals', 'woodenToys'));
  }
  public function getDetailProduct(Request $request) {
    $product = Product::where('id', $request->id)->first();
    $relatedProducts = Product::where('category_id', $product->category_id)
    ->where('id', '!=', $product->id)
    ->take(4)->get();
    return view('pages.detail', compact('product', 'relatedProducts'));
  }

}
