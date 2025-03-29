<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
  public function getIndex () {
    $stuffedAnimals = Product::where('category_id', 1)->get();
    $woodenToys = Product::where('category_id', 2)->get();
    return view('pages.home', compact('stuffedAnimals', 'woodenToys'));
  }
}
