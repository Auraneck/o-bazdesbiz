<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product; 

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->get();
        return view('products.index', compact('categories'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }
}
