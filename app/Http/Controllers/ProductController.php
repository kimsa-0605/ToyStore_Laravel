<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function getIndex () {
    $stuffedAnimals = Product::where('category', 'stuffed_animal')
    ->orderBy('id', 'asc')  
    ->take(4)
    ->get();

    $woodenToys = Product::where('category', 'wooden_toy')
    ->orderBy('id', 'asc')  
    ->take(4)
    ->get();
    
    return view('home', compact('stuffedAnimals', 'woodenToys'));
  }
}
